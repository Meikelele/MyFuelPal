PGDMP                       |            postgres    16.1 (Debian 16.1-1.pgdg120+1)    16.1 V    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    5    postgres    DATABASE     s   CREATE DATABASE postgres WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'en_US.utf8';
    DROP DATABASE postgres;
                docker    false            �           0    0    DATABASE postgres    COMMENT     N   COMMENT ON DATABASE postgres IS 'default administrative connection database';
                   docker    false    3465            �            1259    16585    brand    TABLE     \   CREATE TABLE public.brand (
    id integer NOT NULL,
    name character varying NOT NULL
);
    DROP TABLE public.brand;
       public         heap    docker    false            �            1259    16588    brand_id_seq    SEQUENCE     �   CREATE SEQUENCE public.brand_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.brand_id_seq;
       public          docker    false    219            �           0    0    brand_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.brand_id_seq OWNED BY public.brand.id;
          public          docker    false    220            �            1259    16573    carfile    TABLE     v   CREATE TABLE public.carfile (
    id integer NOT NULL,
    id_vehicle integer NOT NULL,
    file character varying
);
    DROP TABLE public.carfile;
       public         heap    docker    false            �            1259    16576    carfile_id_seq    SEQUENCE     �   CREATE SEQUENCE public.carfile_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.carfile_id_seq;
       public          docker    false    217            �           0    0    carfile_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.carfile_id_seq OWNED BY public.carfile.id;
          public          docker    false    218            �            1259    16609    fuel    TABLE     R   CREATE TABLE public.fuel (
    id integer NOT NULL,
    type character varying
);
    DROP TABLE public.fuel;
       public         heap    docker    false            �            1259    16612    fuel_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fuel_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.fuel_id_seq;
       public          docker    false    223            �           0    0    fuel_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.fuel_id_seq OWNED BY public.fuel.id;
          public          docker    false    224            �            1259    16645    fuelnote    TABLE       CREATE TABLE public.fuelnote (
    id integer NOT NULL,
    id_user integer NOT NULL,
    price double precision NOT NULL,
    liters double precision NOT NULL,
    date timestamp without time zone NOT NULL,
    car integer NOT NULL,
    note character varying NOT NULL
);
    DROP TABLE public.fuelnote;
       public         heap    docker    false            �            1259    16597    model    TABLE     r   CREATE TABLE public.model (
    id integer NOT NULL,
    name character varying,
    id_brand integer NOT NULL
);
    DROP TABLE public.model;
       public         heap    docker    false            �            1259    16633    vehicle    TABLE     x  CREATE TABLE public.vehicle (
    id integer NOT NULL,
    id_user integer NOT NULL,
    id_brand integer NOT NULL,
    id_model integer NOT NULL,
    nickname character varying NOT NULL,
    course character varying,
    platenumber character varying NOT NULL,
    countryoforigin character varying NOT NULL,
    fuel integer NOT NULL,
    note character varying NOT NULL
);
    DROP TABLE public.vehicle;
       public         heap    docker    false            �            1259    16765    fuelnote_extended    VIEW       CREATE VIEW public.fuelnote_extended AS
 SELECT f.id,
    f.id_user,
    f.price,
    f.liters,
    f.date,
    f.car,
    f.note,
    v.nickname,
    b.name AS brand,
    m.name AS model
   FROM (((public.fuelnote f
     LEFT JOIN public.vehicle v ON ((v.id = f.car)))
     LEFT JOIN public.brand b ON ((b.id = v.id_brand)))
     LEFT JOIN public.model m ON ((m.id = v.id_model)));
 $   DROP VIEW public.fuelnote_extended;
       public          docker    false    221    221    219    219    229    229    229    229    229    229    229    227    227    227    227            �            1259    16648    fuelnote_id_seq    SEQUENCE     �   CREATE SEQUENCE public.fuelnote_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.fuelnote_id_seq;
       public          docker    false    229            �           0    0    fuelnote_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.fuelnote_id_seq OWNED BY public.fuelnote.id;
          public          docker    false    230            �            1259    16600    model_id_seq    SEQUENCE     �   CREATE SEQUENCE public.model_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.model_id_seq;
       public          docker    false    221            �           0    0    model_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.model_id_seq OWNED BY public.model.id;
          public          docker    false    222            �            1259    16561    profilefile    TABLE     w   CREATE TABLE public.profilefile (
    id integer NOT NULL,
    id_user integer NOT NULL,
    file character varying
);
    DROP TABLE public.profilefile;
       public         heap    docker    false            �            1259    16564    profilefile_id_seq    SEQUENCE     �   CREATE SEQUENCE public.profilefile_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.profilefile_id_seq;
       public          docker    false    215            �           0    0    profilefile_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.profilefile_id_seq OWNED BY public.profilefile.id;
          public          docker    false    216            �            1259    16710    role    TABLE     [   CREATE TABLE public.role (
    id integer NOT NULL,
    name character varying NOT NULL
);
    DROP TABLE public.role;
       public         heap    docker    false            �            1259    16713    role_id_seq    SEQUENCE     �   CREATE SEQUENCE public.role_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.role_id_seq;
       public          docker    false    231            �           0    0    role_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.role_id_seq OWNED BY public.role.id;
          public          docker    false    232            �            1259    16621    user    TABLE     �   CREATE TABLE public."user" (
    id integer NOT NULL,
    name character varying NOT NULL,
    surname character varying NOT NULL,
    email character varying NOT NULL,
    password character varying NOT NULL
);
    DROP TABLE public."user";
       public         heap    docker    false            �            1259    16624    user_id_seq    SEQUENCE     �   CREATE SEQUENCE public.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.user_id_seq;
       public          docker    false    225            �           0    0    user_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.user_id_seq OWNED BY public."user".id;
          public          docker    false    226            �            1259    16722 	   user_role    TABLE     ^   CREATE TABLE public.user_role (
    id_user integer NOT NULL,
    id_role integer NOT NULL
);
    DROP TABLE public.user_role;
       public         heap    docker    false            �            1259    16725    user_role_id_user_seq    SEQUENCE     �   CREATE SEQUENCE public.user_role_id_user_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 ,   DROP SEQUENCE public.user_role_id_user_seq;
       public          docker    false    233            �           0    0    user_role_id_user_seq    SEQUENCE OWNED BY     O   ALTER SEQUENCE public.user_role_id_user_seq OWNED BY public.user_role.id_user;
          public          docker    false    234            �            1259    16754    user_vehicles    VIEW     �  CREATE VIEW public.user_vehicles AS
 SELECT u.id,
    u.name,
    u.surname,
    u.email,
    v.id AS id_vehicle,
    v.nickname,
    b.name AS brand,
    m.name AS model,
    f.type AS fuel
   FROM ((((public."user" u
     JOIN public.vehicle v ON ((v.id_user = u.id)))
     LEFT JOIN public.brand b ON ((b.id = v.id_brand)))
     LEFT JOIN public.model m ON ((m.id = v.id_model)))
     LEFT JOIN public.fuel f ON ((f.id = v.fuel)));
     DROP VIEW public.user_vehicles;
       public          docker    false    225    219    219    221    221    223    223    225    225    225    227    227    227    227    227    227            �            1259    16636    vehicle_id_seq    SEQUENCE     �   CREATE SEQUENCE public.vehicle_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.vehicle_id_seq;
       public          docker    false    227            �           0    0    vehicle_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.vehicle_id_seq OWNED BY public.vehicle.id;
          public          docker    false    228            �           2604    16589    brand id    DEFAULT     d   ALTER TABLE ONLY public.brand ALTER COLUMN id SET DEFAULT nextval('public.brand_id_seq'::regclass);
 7   ALTER TABLE public.brand ALTER COLUMN id DROP DEFAULT;
       public          docker    false    220    219            �           2604    16577 
   carfile id    DEFAULT     h   ALTER TABLE ONLY public.carfile ALTER COLUMN id SET DEFAULT nextval('public.carfile_id_seq'::regclass);
 9   ALTER TABLE public.carfile ALTER COLUMN id DROP DEFAULT;
       public          docker    false    218    217            �           2604    16613    fuel id    DEFAULT     b   ALTER TABLE ONLY public.fuel ALTER COLUMN id SET DEFAULT nextval('public.fuel_id_seq'::regclass);
 6   ALTER TABLE public.fuel ALTER COLUMN id DROP DEFAULT;
       public          docker    false    224    223            �           2604    16649    fuelnote id    DEFAULT     j   ALTER TABLE ONLY public.fuelnote ALTER COLUMN id SET DEFAULT nextval('public.fuelnote_id_seq'::regclass);
 :   ALTER TABLE public.fuelnote ALTER COLUMN id DROP DEFAULT;
       public          docker    false    230    229            �           2604    16601    model id    DEFAULT     d   ALTER TABLE ONLY public.model ALTER COLUMN id SET DEFAULT nextval('public.model_id_seq'::regclass);
 7   ALTER TABLE public.model ALTER COLUMN id DROP DEFAULT;
       public          docker    false    222    221            �           2604    16565    profilefile id    DEFAULT     p   ALTER TABLE ONLY public.profilefile ALTER COLUMN id SET DEFAULT nextval('public.profilefile_id_seq'::regclass);
 =   ALTER TABLE public.profilefile ALTER COLUMN id DROP DEFAULT;
       public          docker    false    216    215            �           2604    16714    role id    DEFAULT     b   ALTER TABLE ONLY public.role ALTER COLUMN id SET DEFAULT nextval('public.role_id_seq'::regclass);
 6   ALTER TABLE public.role ALTER COLUMN id DROP DEFAULT;
       public          docker    false    232    231            �           2604    16625    user id    DEFAULT     d   ALTER TABLE ONLY public."user" ALTER COLUMN id SET DEFAULT nextval('public.user_id_seq'::regclass);
 8   ALTER TABLE public."user" ALTER COLUMN id DROP DEFAULT;
       public          docker    false    226    225            �           2604    16726    user_role id_user    DEFAULT     v   ALTER TABLE ONLY public.user_role ALTER COLUMN id_user SET DEFAULT nextval('public.user_role_id_user_seq'::regclass);
 @   ALTER TABLE public.user_role ALTER COLUMN id_user DROP DEFAULT;
       public          docker    false    234    233            �           2604    16637 
   vehicle id    DEFAULT     h   ALTER TABLE ONLY public.vehicle ALTER COLUMN id SET DEFAULT nextval('public.vehicle_id_seq'::regclass);
 9   ALTER TABLE public.vehicle ALTER COLUMN id DROP DEFAULT;
       public          docker    false    228    227            t          0    16585    brand 
   TABLE DATA           )   COPY public.brand (id, name) FROM stdin;
    public          docker    false    219   t^       r          0    16573    carfile 
   TABLE DATA           7   COPY public.carfile (id, id_vehicle, file) FROM stdin;
    public          docker    false    217   �^       x          0    16609    fuel 
   TABLE DATA           (   COPY public.fuel (id, type) FROM stdin;
    public          docker    false    223   �^       ~          0    16645    fuelnote 
   TABLE DATA           O   COPY public.fuelnote (id, id_user, price, liters, date, car, note) FROM stdin;
    public          docker    false    229   �^       v          0    16597    model 
   TABLE DATA           3   COPY public.model (id, name, id_brand) FROM stdin;
    public          docker    false    221   �_       p          0    16561    profilefile 
   TABLE DATA           8   COPY public.profilefile (id, id_user, file) FROM stdin;
    public          docker    false    215   �_       �          0    16710    role 
   TABLE DATA           (   COPY public.role (id, name) FROM stdin;
    public          docker    false    231   �_       z          0    16621    user 
   TABLE DATA           D   COPY public."user" (id, name, surname, email, password) FROM stdin;
    public          docker    false    225   �_       �          0    16722 	   user_role 
   TABLE DATA           5   COPY public.user_role (id_user, id_role) FROM stdin;
    public          docker    false    233   �`       |          0    16633    vehicle 
   TABLE DATA           ~   COPY public.vehicle (id, id_user, id_brand, id_model, nickname, course, platenumber, countryoforigin, fuel, note) FROM stdin;
    public          docker    false    227   a       �           0    0    brand_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.brand_id_seq', 2, true);
          public          docker    false    220            �           0    0    carfile_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.carfile_id_seq', 1, false);
          public          docker    false    218            �           0    0    fuel_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.fuel_id_seq', 4, true);
          public          docker    false    224            �           0    0    fuelnote_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.fuelnote_id_seq', 7, true);
          public          docker    false    230            �           0    0    model_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.model_id_seq', 2, true);
          public          docker    false    222            �           0    0    profilefile_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.profilefile_id_seq', 1, false);
          public          docker    false    216            �           0    0    role_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.role_id_seq', 1, false);
          public          docker    false    232            �           0    0    user_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('public.user_id_seq', 3, true);
          public          docker    false    226            �           0    0    user_role_id_user_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.user_role_id_user_seq', 1, false);
          public          docker    false    234            �           0    0    vehicle_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.vehicle_id_seq', 7, true);
          public          docker    false    228            �           2606    16596    brand brand_pk 
   CONSTRAINT     L   ALTER TABLE ONLY public.brand
    ADD CONSTRAINT brand_pk PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.brand DROP CONSTRAINT brand_pk;
       public            docker    false    219            �           2606    16584    carfile carfile_pk 
   CONSTRAINT     P   ALTER TABLE ONLY public.carfile
    ADD CONSTRAINT carfile_pk PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.carfile DROP CONSTRAINT carfile_pk;
       public            docker    false    217            �           2606    16620    fuel fuel_pk 
   CONSTRAINT     J   ALTER TABLE ONLY public.fuel
    ADD CONSTRAINT fuel_pk PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.fuel DROP CONSTRAINT fuel_pk;
       public            docker    false    223            �           2606    16656    fuelnote fuelnote_pk 
   CONSTRAINT     R   ALTER TABLE ONLY public.fuelnote
    ADD CONSTRAINT fuelnote_pk PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.fuelnote DROP CONSTRAINT fuelnote_pk;
       public            docker    false    229            �           2606    16608    model model_pk 
   CONSTRAINT     L   ALTER TABLE ONLY public.model
    ADD CONSTRAINT model_pk PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.model DROP CONSTRAINT model_pk;
       public            docker    false    221            �           2606    16572    profilefile profilefile_pk 
   CONSTRAINT     X   ALTER TABLE ONLY public.profilefile
    ADD CONSTRAINT profilefile_pk PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.profilefile DROP CONSTRAINT profilefile_pk;
       public            docker    false    215            �           2606    16721    role role_pk 
   CONSTRAINT     J   ALTER TABLE ONLY public.role
    ADD CONSTRAINT role_pk PRIMARY KEY (id);
 6   ALTER TABLE ONLY public.role DROP CONSTRAINT role_pk;
       public            docker    false    231            �           2606    16632    user user_pk 
   CONSTRAINT     L   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pk PRIMARY KEY (id);
 8   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_pk;
       public            docker    false    225            �           2606    16704    user user_pk_2 
   CONSTRAINT     L   ALTER TABLE ONLY public."user"
    ADD CONSTRAINT user_pk_2 UNIQUE (email);
 :   ALTER TABLE ONLY public."user" DROP CONSTRAINT user_pk_2;
       public            docker    false    225            �           2606    16644    vehicle vehicle_pk 
   CONSTRAINT     P   ALTER TABLE ONLY public.vehicle
    ADD CONSTRAINT vehicle_pk PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.vehicle DROP CONSTRAINT vehicle_pk;
       public            docker    false    227            �           2606    16698    carfile carfile_vehicle_id_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.carfile
    ADD CONSTRAINT carfile_vehicle_id_fk FOREIGN KEY (id_vehicle) REFERENCES public.vehicle(id);
 G   ALTER TABLE ONLY public.carfile DROP CONSTRAINT carfile_vehicle_id_fk;
       public          docker    false    227    217    3281            �           2606    16688    fuelnote fuelnote_user_id_fk    FK CONSTRAINT     |   ALTER TABLE ONLY public.fuelnote
    ADD CONSTRAINT fuelnote_user_id_fk FOREIGN KEY (id_user) REFERENCES public."user"(id);
 F   ALTER TABLE ONLY public.fuelnote DROP CONSTRAINT fuelnote_user_id_fk;
       public          docker    false    225    229    3277            �           2606    16693    fuelnote fuelnote_vehicle_id_fk    FK CONSTRAINT     |   ALTER TABLE ONLY public.fuelnote
    ADD CONSTRAINT fuelnote_vehicle_id_fk FOREIGN KEY (car) REFERENCES public.vehicle(id);
 I   ALTER TABLE ONLY public.fuelnote DROP CONSTRAINT fuelnote_vehicle_id_fk;
       public          docker    false    3281    227    229            �           2606    16705    model model_brand_id_fk    FK CONSTRAINT     w   ALTER TABLE ONLY public.model
    ADD CONSTRAINT model_brand_id_fk FOREIGN KEY (id_brand) REFERENCES public.brand(id);
 A   ALTER TABLE ONLY public.model DROP CONSTRAINT model_brand_id_fk;
       public          docker    false    219    3271    221            �           2606    16678 "   profilefile profilefile_user_id_fk    FK CONSTRAINT     �   ALTER TABLE ONLY public.profilefile
    ADD CONSTRAINT profilefile_user_id_fk FOREIGN KEY (id_user) REFERENCES public."user"(id);
 L   ALTER TABLE ONLY public.profilefile DROP CONSTRAINT profilefile_user_id_fk;
       public          docker    false    3277    215    225            �           2606    16658    vehicle vehicle_brand_id_fk    FK CONSTRAINT     {   ALTER TABLE ONLY public.vehicle
    ADD CONSTRAINT vehicle_brand_id_fk FOREIGN KEY (id_brand) REFERENCES public.brand(id);
 E   ALTER TABLE ONLY public.vehicle DROP CONSTRAINT vehicle_brand_id_fk;
       public          docker    false    3271    219    227            �           2606    16668    vehicle vehicle_fuel_id_fk    FK CONSTRAINT     u   ALTER TABLE ONLY public.vehicle
    ADD CONSTRAINT vehicle_fuel_id_fk FOREIGN KEY (fuel) REFERENCES public.fuel(id);
 D   ALTER TABLE ONLY public.vehicle DROP CONSTRAINT vehicle_fuel_id_fk;
       public          docker    false    3275    227    223            �           2606    16663    vehicle vehicle_model_id_fk    FK CONSTRAINT     {   ALTER TABLE ONLY public.vehicle
    ADD CONSTRAINT vehicle_model_id_fk FOREIGN KEY (id_model) REFERENCES public.model(id);
 E   ALTER TABLE ONLY public.vehicle DROP CONSTRAINT vehicle_model_id_fk;
       public          docker    false    227    3273    221            �           2606    16673    vehicle vehicle_user_id_fk    FK CONSTRAINT     z   ALTER TABLE ONLY public.vehicle
    ADD CONSTRAINT vehicle_user_id_fk FOREIGN KEY (id_user) REFERENCES public."user"(id);
 D   ALTER TABLE ONLY public.vehicle DROP CONSTRAINT vehicle_user_id_fk;
       public          docker    false    227    3277    225            t      x�3�t��2�t,M������ $a�      r      x������ � �      x   $   x�3����2�pR�4�2�\&�>�\1z\\\ ^v�      ~   �   x���1�0@��>E.�*q�T�8��F�P��,��*F$����M���
@�Bg]g�X;��Ŭ)�2���7vn_�1�1B��8�ps�p��c=��=$)6�O<Ty���)�M���Mt�%����#-�~�M<ֈ�6x���&;�      v      x�3�t4�4�2�t56�4����� �      p      x������ � �      �      x������ � �      z   �   x�M��N�@ ��>g[(�&[)BCB��]����W����7��Rc��LF�'g�y��]@��j�dJV|���rR�╦�s� V�pR�G������O%�yٱoF�s��,���y�3�������zvd������:�a;��pTg�g�>n�.����)�}�о�ɲ�����Ӆ^��Ѯ5fF����to;�9����CtrR���n���0z�B_I�S      �      x������ � �      |   �   x����
�0���S�	Dku��`���8vۥh�j�R�~���0v)!���kC!pq��Hh���CZ��X�PdV���W8���F��࠰2��$t 
\���B�*ׄ�g�>vX�[@��Cb����K�c�������u�j�u�xe�,�Gv�7f�j.�<��)�V��ӯ�����Mn!�	sU�     