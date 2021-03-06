PGDMP                         y            ecodeDB    13.3    13.3 #    ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    16811    ecodeDB    DATABASE     ^   CREATE DATABASE "ecodeDB" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'en_US.UTF-8';
    DROP DATABASE "ecodeDB";
                admin    false            ?            1259    16910 	   enderecos    TABLE       CREATE TABLE public.enderecos (
    id bigint NOT NULL,
    id_pessoa bigint,
    id_pessoa_juridica bigint,
    estado character varying(255) NOT NULL,
    cidade character varying(255) NOT NULL,
    endereco character varying(255) NOT NULL,
    numero character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.enderecos;
       public         heap    postgres    false            ?            1259    16908    enderecos_id_seq    SEQUENCE     y   CREATE SEQUENCE public.enderecos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.enderecos_id_seq;
       public          postgres    false    207            ?           0    0    enderecos_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.enderecos_id_seq OWNED BY public.enderecos.id;
          public          postgres    false    206            ?            1259    16868 
   migrations    TABLE     ?   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            ?            1259    16866    migrations_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    201            ?           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    200            ?            1259    16891    pessoa_juridicas    TABLE     ?  CREATE TABLE public.pessoa_juridicas (
    id bigint NOT NULL,
    razao_social character varying(255) NOT NULL,
    nome_fantasia character varying(255) NOT NULL,
    cnpj character varying(255) NOT NULL,
    inscricao_estadual character varying(255) NOT NULL,
    fundada_em date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 $   DROP TABLE public.pessoa_juridicas;
       public         heap    postgres    false            ?            1259    16889    pessoa_juridicas_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.pessoa_juridicas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 .   DROP SEQUENCE public.pessoa_juridicas_id_seq;
       public          postgres    false    205            ?           0    0    pessoa_juridicas_id_seq    SEQUENCE OWNED BY     S   ALTER SEQUENCE public.pessoa_juridicas_id_seq OWNED BY public.pessoa_juridicas.id;
          public          postgres    false    204            ?            1259    16876    pessoas    TABLE     Q  CREATE TABLE public.pessoas (
    id bigint NOT NULL,
    nome character varying(255) NOT NULL,
    cpf character varying(255) NOT NULL,
    rg character varying(255) NOT NULL,
    genero integer NOT NULL,
    data_nascimento date NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.pessoas;
       public         heap    postgres    false            ?            1259    16874    pessoas_id_seq    SEQUENCE     w   CREATE SEQUENCE public.pessoas_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.pessoas_id_seq;
       public          postgres    false    203            ?           0    0    pessoas_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.pessoas_id_seq OWNED BY public.pessoas.id;
          public          postgres    false    202            ?            1259    16921 	   telefones    TABLE       CREATE TABLE public.telefones (
    id bigint NOT NULL,
    id_pessoa bigint,
    id_pessoa_juridica bigint,
    numero_telefone character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.telefones;
       public         heap    postgres    false            ?            1259    16919    telefones_id_seq    SEQUENCE     y   CREATE SEQUENCE public.telefones_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.telefones_id_seq;
       public          postgres    false    209            ?           0    0    telefones_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.telefones_id_seq OWNED BY public.telefones.id;
          public          postgres    false    208            E           2604    16913    enderecos id    DEFAULT     l   ALTER TABLE ONLY public.enderecos ALTER COLUMN id SET DEFAULT nextval('public.enderecos_id_seq'::regclass);
 ;   ALTER TABLE public.enderecos ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    207    206    207            B           2604    16871    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    201    200    201            D           2604    16894    pessoa_juridicas id    DEFAULT     z   ALTER TABLE ONLY public.pessoa_juridicas ALTER COLUMN id SET DEFAULT nextval('public.pessoa_juridicas_id_seq'::regclass);
 B   ALTER TABLE public.pessoa_juridicas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    204    205    205            C           2604    16879 
   pessoas id    DEFAULT     h   ALTER TABLE ONLY public.pessoas ALTER COLUMN id SET DEFAULT nextval('public.pessoas_id_seq'::regclass);
 9   ALTER TABLE public.pessoas ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    203    202    203            F           2604    16924    telefones id    DEFAULT     l   ALTER TABLE ONLY public.telefones ALTER COLUMN id SET DEFAULT nextval('public.telefones_id_seq'::regclass);
 ;   ALTER TABLE public.telefones ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    209    208    209            Z           2606    16918    enderecos enderecos_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.enderecos
    ADD CONSTRAINT enderecos_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.enderecos DROP CONSTRAINT enderecos_pkey;
       public            postgres    false    207            H           2606    16873    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    201            P           2606    16905 -   pessoa_juridicas pessoa_juridicas_cnpj_unique 
   CONSTRAINT     h   ALTER TABLE ONLY public.pessoa_juridicas
    ADD CONSTRAINT pessoa_juridicas_cnpj_unique UNIQUE (cnpj);
 W   ALTER TABLE ONLY public.pessoa_juridicas DROP CONSTRAINT pessoa_juridicas_cnpj_unique;
       public            postgres    false    205            R           2606    16907 ;   pessoa_juridicas pessoa_juridicas_inscricao_estadual_unique 
   CONSTRAINT     ?   ALTER TABLE ONLY public.pessoa_juridicas
    ADD CONSTRAINT pessoa_juridicas_inscricao_estadual_unique UNIQUE (inscricao_estadual);
 e   ALTER TABLE ONLY public.pessoa_juridicas DROP CONSTRAINT pessoa_juridicas_inscricao_estadual_unique;
       public            postgres    false    205            T           2606    16903 6   pessoa_juridicas pessoa_juridicas_nome_fantasia_unique 
   CONSTRAINT     z   ALTER TABLE ONLY public.pessoa_juridicas
    ADD CONSTRAINT pessoa_juridicas_nome_fantasia_unique UNIQUE (nome_fantasia);
 `   ALTER TABLE ONLY public.pessoa_juridicas DROP CONSTRAINT pessoa_juridicas_nome_fantasia_unique;
       public            postgres    false    205            V           2606    16899 &   pessoa_juridicas pessoa_juridicas_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public.pessoa_juridicas
    ADD CONSTRAINT pessoa_juridicas_pkey PRIMARY KEY (id);
 P   ALTER TABLE ONLY public.pessoa_juridicas DROP CONSTRAINT pessoa_juridicas_pkey;
       public            postgres    false    205            X           2606    16901 5   pessoa_juridicas pessoa_juridicas_razao_social_unique 
   CONSTRAINT     x   ALTER TABLE ONLY public.pessoa_juridicas
    ADD CONSTRAINT pessoa_juridicas_razao_social_unique UNIQUE (razao_social);
 _   ALTER TABLE ONLY public.pessoa_juridicas DROP CONSTRAINT pessoa_juridicas_razao_social_unique;
       public            postgres    false    205            J           2606    16886    pessoas pessoas_cpf_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.pessoas
    ADD CONSTRAINT pessoas_cpf_unique UNIQUE (cpf);
 D   ALTER TABLE ONLY public.pessoas DROP CONSTRAINT pessoas_cpf_unique;
       public            postgres    false    203            L           2606    16884    pessoas pessoas_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.pessoas
    ADD CONSTRAINT pessoas_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.pessoas DROP CONSTRAINT pessoas_pkey;
       public            postgres    false    203            N           2606    16888    pessoas pessoas_rg_unique 
   CONSTRAINT     R   ALTER TABLE ONLY public.pessoas
    ADD CONSTRAINT pessoas_rg_unique UNIQUE (rg);
 C   ALTER TABLE ONLY public.pessoas DROP CONSTRAINT pessoas_rg_unique;
       public            postgres    false    203            \           2606    16926    telefones telefones_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.telefones
    ADD CONSTRAINT telefones_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.telefones DROP CONSTRAINT telefones_pkey;
       public            postgres    false    209           