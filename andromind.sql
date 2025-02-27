-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2022 pada 04.41
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andro_mind`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `applies`
--

CREATE TABLE `applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcard` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gander` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `applies`
--

INSERT INTO `applies` (`id`, `title`, `idcard`, `name`, `gander`, `address`, `city`, `date`, `email`, `phone`, `education`, `school`, `major`, `gpa`, `graduation`, `course1`, `course2`, `course3`, `experience1`, `experience2`, `experience3`, `cv`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Backend Developer', '1234567890987654', 'Romie Romie', 'male', 'Serang', 'Serang Banten', '2001-01-01', 'romie@gmail.com', '0098765432112', 'S1', 'Universitas', 'Jurusan apa aja', '4.00', '2022-02-02', 'Tidak Pernah', 'Tidak Pernah', 'Tidak Pernah', 'Tidak Pernah', 'Tidak Pernah', 'Tidak Pernah', 'apply-pdf/pTinAo4gsRPDGGTVLVwxCFitt1797A97SnMFtma3.pdf', 'apply-image/LiMsKSPe7Qri0akZbcLJjxKBVUS30elRa9ucL9vc.jpg', '2022-09-21 19:38:54', '2022-09-21 19:38:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Web Programming', 'web-programming', '2022-09-21 19:07:56', '2022-09-21 19:07:56'),
(2, 'Design', 'design', '2022-09-21 19:07:56', '2022-09-21 19:07:56'),
(3, 'Personal', 'personal', '2022-09-21 19:07:56', '2022-09-21 19:07:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_11_034805_create_news_table', 1),
(6, '2022_09_11_064503_create_categories_table', 1),
(7, '2022_09_14_125834_create_prospects_table', 1),
(8, '2022_09_15_010127_create_startups_table', 1),
(9, '2022_09_15_071742_create_works_table', 1),
(10, '2022_09_16_131120_create_applies_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ratione officiis fugiat.', 'et-voluptatem-non-vel-sit-qui-est', NULL, 'Accusantium veritatis vel id tenetur doloribus inventore. Eum excepturi aut neque voluptatum. Id eaque doloribus ea deserunt voluptatibus beatae. Deserunt et aut dolorem facilis impedit dignissimos hic.', '<p>Sit sit ea suscipit sunt aut rerum dolor. Placeat ad exercitationem modi et qui nesciunt maxime. Qui voluptate delectus aut ab.</p><p>Et sunt nemo provident harum sequi necessitatibus. Dolorem maiores corrupti error deserunt aliquid sit assumenda qui. Consequatur ad ratione qui eveniet nostrum. Aut porro commodi et inventore aspernatur.</p><p>Et voluptas culpa molestiae aut a. Sint eum maiores nihil voluptatem et autem occaecati. Nostrum ut quae voluptatibus molestiae. Facere et omnis ut velit.</p><p>Vel et in sequi eaque quo. Consectetur eum saepe similique sint cumque sit corporis odio. Rem et et aut sed sint nisi enim dignissimos. Exercitationem ipsum numquam tempora.</p><p>Est et incidunt qui deleniti. Quos et quo non est neque fuga. Blanditiis at perferendis quia.</p><p>Quasi consequuntur non non. Aut aut et blanditiis magnam consectetur rerum. Architecto nihil qui quo aut repellat soluta similique.</p><p>Necessitatibus asperiores suscipit quia. Tenetur vero beatae nam facere enim laudantium voluptatum. Quam quibusdam ut tenetur hic architecto vel fuga molestiae. Occaecati iusto eaque libero vel dolor vel hic.</p><p>Repellendus sunt iste quis hic aut. Dolor sunt doloremque incidunt aliquam. Consequuntur sint nihil itaque impedit delectus dolor quia ut.</p><p>Et dolorum accusamus quaerat sed ut nostrum nemo. Facilis sunt aut exercitationem non eveniet voluptatem nihil. Aspernatur architecto magni consequatur. Quos repellat voluptates asperiores a.</p><p>Aperiam commodi neque autem est unde eum. Itaque tenetur vel et libero delectus labore sunt. Fuga voluptas iste nostrum sed commodi. Laboriosam aut et est autem praesentium temporibus numquam nihil. Dolorem quis tenetur illo esse ut voluptatum illo.</p>', NULL, '2022-09-21 19:07:56', '2022-09-21 19:07:56'),
(2, 1, 1, 'Et voluptatibus praesentium aut distinctio est.', 'omnis-dolor-qui-aspernatur-debitis-debitis-sit', NULL, 'Quaerat officiis omnis accusantium assumenda voluptatum error labore. Provident non voluptates nostrum in rerum. Consequuntur aut voluptatibus adipisci nobis quaerat sapiente eveniet.', '<p>Adipisci esse quae eligendi. Assumenda voluptatem exercitationem voluptatem error. Sapiente in numquam non.</p><p>Quaerat ut omnis ducimus labore id suscipit suscipit qui. Iure voluptatem dolores nemo consectetur. Nobis impedit in quaerat et sint.</p><p>Mollitia iste rerum esse non recusandae. Labore molestiae voluptatibus et maiores neque labore delectus. Nihil commodi voluptatum sapiente ratione quasi et et. Consequuntur similique ipsa quis.</p><p>Voluptatem est qui dolor et et est. Nihil quis dolorem est. Voluptate voluptatibus ab blanditiis ut dolores omnis odio. Dolorem ut et quis perferendis.</p><p>Laborum atque rerum inventore mollitia dolores et natus nemo. Dolor consequuntur in optio ab. Itaque et dolore et eaque assumenda.</p><p>Ut modi est aut cum et. Provident culpa sint non. In esse velit id sunt ea earum.</p><p>Dolorem et nesciunt eum omnis. Odio quidem iure vel unde ducimus aut. Consequatur doloribus et corrupti qui architecto sit tenetur. Sint corrupti voluptate dolorem suscipit ullam. Nobis alias unde eos ratione alias.</p>', NULL, '2022-09-21 19:07:56', '2022-09-21 19:07:56'),
(3, 3, 1, 'Similique incidunt unde earum.', 'aliquid-voluptatem-nihil-eos', NULL, 'Deleniti incidunt itaque omnis omnis. Nihil tempora sed est cum quia laborum doloremque. Enim illo velit rerum veniam. Id atque excepturi excepturi est quisquam occaecati.', '<p>Earum doloremque eum harum laudantium ad est impedit. Id voluptatem asperiores dolore nihil. Accusamus similique et officia tempora.</p><p>Error sed consequatur reprehenderit aut et. Illo alias impedit labore veniam ad est. Sapiente illum qui error sint cum. Ducimus culpa occaecati odio.</p><p>Aut sint enim nam cumque et consequatur. Est voluptatem eius excepturi est illo eum earum.</p><p>Soluta aut ea voluptas iusto tempore ipsam distinctio nihil. Facilis debitis molestias qui et enim veniam sint qui. Provident mollitia iusto sit. Sint distinctio dicta ullam praesentium mollitia ut ut.</p><p>Aliquam molestiae voluptas aperiam sit sequi deleniti omnis provident. Quae saepe labore iusto quidem aut molestiae voluptatem. Sit distinctio aperiam eos et vel magni repudiandae. Minima libero qui laboriosam ea.</p><p>Odio dolore pariatur quidem adipisci. Veniam occaecati voluptatum dolorem quia perspiciatis reprehenderit. Quia beatae quae eos quasi rem eligendi cupiditate.</p><p>Impedit qui rerum ut quidem ducimus velit est voluptatum. Omnis sequi vel omnis eligendi dolor neque. Molestias aut consequatur quae aut. Tempore omnis recusandae commodi sit aut vel impedit. In illo velit magni cumque.</p><p>Ut quia odio nihil deleniti qui. Qui et at non eveniet. Quia minima laborum impedit quo.</p><p>Ex quibusdam cumque excepturi. Quis quaerat reprehenderit est expedita facilis. Aliquam recusandae omnis soluta voluptatum nemo dolorem. Temporibus vero dolores iusto nisi ut pariatur eos.</p>', NULL, '2022-09-21 19:07:56', '2022-09-21 19:07:56'),
(4, 3, 1, 'Facere rem inventore autem odio sunt nam.', 'id-ut-autem-velit-est-dolores-magni-accusantium', NULL, 'Impedit et fuga modi soluta accusantium assumenda est placeat. Corporis labore saepe consectetur est dolorum excepturi tempora veritatis. Ipsa deserunt odit et perspiciatis.', '<p>Excepturi adipisci suscipit doloribus et amet et. Impedit neque nostrum optio a quia a. Similique laborum ducimus voluptatem blanditiis ut quam. Voluptate quos explicabo voluptatem.</p><p>Alias hic incidunt quaerat. Porro maxime vero dolorem excepturi. Autem cum quasi nihil dignissimos ullam. Provident dolorem aut quia aut maiores quibusdam vel.</p><p>Et sit eius qui suscipit expedita quia nostrum. Dolores nihil et eius voluptates similique iste. Soluta incidunt eum repellat occaecati. Fugit provident recusandae fugit aspernatur nam omnis libero. Quia libero dolores laudantium cupiditate aut laudantium aut amet.</p><p>Aut asperiores quis itaque modi incidunt. In dolores alias dolor sit. Sunt inventore id consequatur saepe ratione doloribus illo enim. Et ut maiores quia consectetur id similique numquam iure.</p><p>Blanditiis optio nihil qui iusto et consequatur ab. Non et debitis sequi ea ex in qui. Nihil rerum et dolore animi sunt nesciunt magnam. Ut vero magni sed quia debitis et.</p>', NULL, '2022-09-21 19:07:56', '2022-09-21 19:07:56'),
(5, 3, 1, 'Cumque itaque ullam est autem nesciunt odit.', 'deserunt-quo-vel-fugit-quidem-pariatur-mollitia', NULL, 'Odit ea odio quia rerum iusto ea. Minima autem cum expedita et ea. Eveniet consequuntur sit dolores deleniti. Ex quia eius eligendi quos maiores quae qui.', '<p>Saepe hic eos voluptas minima eveniet eius. Aliquid numquam dicta adipisci quia numquam quia natus. Quia quae omnis praesentium atque itaque omnis distinctio. Facilis harum reiciendis quam.</p><p>Distinctio omnis voluptatibus officiis. Aperiam aperiam saepe exercitationem doloribus animi. Quis itaque earum voluptatem tenetur sit odit. Quaerat et rerum eos ducimus non.</p><p>Et sed velit aliquam qui rerum laborum id. Nihil id pariatur qui quaerat labore praesentium. Aut aut eaque similique quas sit explicabo. Animi blanditiis quod eos quam.</p><p>Molestiae nostrum ratione velit maxime dolorum illo placeat. Velit quis cupiditate assumenda et libero dicta sit.</p><p>Possimus eos inventore veritatis in sint. Tempore sed ut exercitationem et laboriosam occaecati.</p>', NULL, '2022-09-21 19:07:56', '2022-09-21 19:07:56'),
(6, 1, 1, 'Adipisci fugit omnis quam similique.', 'maiores-exercitationem-sit-vitae-ut-et-omnis-earum-laudantium', NULL, 'Itaque aperiam sapiente soluta quia. In dolorem assumenda velit molestias dignissimos. Itaque harum explicabo sed magni rem suscipit at.', '<p>Eaque sit id est soluta corrupti impedit nemo. Voluptatem porro iure sit facere non recusandae et. Ducimus perferendis voluptatem veniam eos aspernatur. Deserunt eos omnis aut ut qui.</p><p>Ut adipisci in qui corporis. Dolores debitis qui veniam dolore esse voluptas. Sit officia quibusdam porro dolorum impedit deserunt. Ducimus omnis quia accusantium ut saepe. Et non quo ipsa nihil dignissimos.</p><p>Voluptatem dolor deserunt amet voluptatem. Qui iste aliquid dolor consequatur facilis et. Sapiente delectus id repudiandae deleniti fuga aut expedita.</p><p>Cum ut deleniti delectus est tempore similique saepe. Illo sint et praesentium in provident natus laborum eaque. Nostrum cupiditate qui excepturi sit. Et culpa illum nostrum laudantium quod. Qui consequatur neque sed culpa perspiciatis consequatur et vel.</p><p>Quis voluptas optio aperiam et quam magnam sed. Minima voluptate culpa quod quia qui. Nihil enim hic eum fuga eum aut voluptatum. Vero debitis repellat aut et rerum.</p><p>Ut et incidunt illo exercitationem error facilis recusandae. Odio veniam rerum quia. Ducimus et iusto quam quo et at autem dignissimos. Occaecati sit occaecati est eveniet unde.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(7, 3, 1, 'Repellendus et aut omnis rerum voluptates quia iusto.', 'aut-delectus-provident-aliquid-doloribus-unde-quidem-minima', NULL, 'Hic commodi totam adipisci corrupti quas eaque error. Et non vero explicabo ut laboriosam consequuntur voluptatum. Voluptas nobis dolore qui nesciunt omnis minus esse. Tempora est in possimus id. Ratione dolorem nemo iusto sint nihil asperiores magni.', '<p>Assumenda cum est qui vitae at non. Nihil accusantium similique quos pariatur. Possimus fugit eligendi officiis officia.</p><p>Aut atque temporibus consequatur dicta omnis nesciunt eum. Et ad recusandae rerum velit dolorem cumque iure. Et sed aliquid esse. Excepturi maxime quae reiciendis et est. Laboriosam ea praesentium non est esse et.</p><p>Ipsam nulla consequatur est officia. Dolorum accusantium culpa iusto et voluptas adipisci tempora sed. Necessitatibus et velit odit omnis in nulla optio doloremque. Iste est in quos impedit est illum sed.</p><p>Sunt ut repudiandae vel porro quis in sint. Aut quia consequatur qui beatae. Voluptates est dolor veniam tempore quia inventore eveniet omnis.</p><p>Consequatur tempora maiores rerum. Eligendi natus vero neque quis perspiciatis. Et perspiciatis et itaque quam molestias cupiditate.</p><p>Labore est id sit voluptatum recusandae quia laudantium aut. Sed tenetur illo natus repudiandae. Est dignissimos occaecati magni similique omnis. Corporis voluptatem eos autem et aut in.</p><p>Et sit sed praesentium id accusamus quia. Error sunt eaque exercitationem blanditiis sunt. Natus magnam porro qui quia nostrum aliquid. Autem reiciendis ea sit sint qui accusamus reprehenderit enim.</p><p>Facilis et labore ut aliquam repellat. Cumque sapiente beatae beatae iure. Delectus ipsa quia vel ab. Rerum voluptas occaecati autem consectetur laudantium autem. Deserunt excepturi veniam molestiae itaque impedit nobis similique.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(8, 3, 1, 'Velit est unde quis possimus et nihil.', 'autem-ut-qui-ipsum-dicta-non', NULL, 'Neque aliquid voluptatem laborum explicabo quaerat. Velit voluptates occaecati dolores debitis velit facilis.', '<p>Optio perferendis modi ullam recusandae aliquam harum. Qui aut in autem sunt nihil voluptas saepe. Perferendis voluptatem voluptas minima aut. Fugit quia omnis aut sint nobis ea.</p><p>Quasi dolorum deserunt et odio sapiente numquam atque molestias. Voluptatem cupiditate qui ut saepe possimus eos. Impedit dolor eum omnis amet quo quo. Iure repellat ut aut suscipit molestias. Quia quam doloribus a nihil.</p><p>Excepturi quasi et omnis. Perspiciatis omnis sit laboriosam quasi qui esse. Fugit est eos eos nihil dignissimos.</p><p>Omnis delectus nam fugit quis beatae id. Aut reiciendis nisi qui et. Occaecati repellat commodi autem et culpa. Earum a alias autem ut alias.</p><p>Voluptatibus laudantium et sit ducimus ipsum quis reiciendis. Voluptatem deleniti nulla quod laboriosam illum.</p><p>Corporis molestiae quia sed et totam voluptates a quisquam. Amet omnis ut asperiores accusantium dolorum dolores ut. Reprehenderit architecto cumque vel corrupti sit. Qui iste quod facere sequi cupiditate ducimus tenetur. Accusantium nisi voluptates laborum sint.</p><p>Eum sunt molestiae nihil laudantium. Sit et placeat ipsam qui consequatur aut porro. Aut ut veritatis incidunt error adipisci quasi. Nihil aut facilis porro rem est eligendi.</p><p>Impedit quis enim dignissimos cum quibusdam quasi. Neque dolor sit ullam saepe aut cum sapiente. Aut dolorum sunt non voluptate. Harum et autem quia non veniam autem.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(9, 3, 1, 'Unde voluptatem expedita ut.', 'minima-deleniti-est-rem-aut-quod-ducimus-corporis-recusandae', NULL, 'Earum consequatur minima iusto ipsa. Et saepe aliquam sapiente sed quo. Recusandae corporis est doloremque molestiae sequi adipisci est. Ab omnis ut similique est ipsa ut nihil.', '<p>Qui aut rerum vel saepe commodi aut quas neque. Amet maxime omnis velit tempora. Nemo in tempora sunt sunt laudantium reprehenderit voluptatem. Et ratione est minima dignissimos ipsam quis quisquam praesentium.</p><p>Hic quis neque delectus nam at laudantium nesciunt. Dicta saepe accusantium aut eum possimus molestiae. Optio ipsa sunt in error quia minus sed.</p><p>Sequi dolore quod omnis. Distinctio dolorum tempore non voluptas itaque dolor qui et. Voluptas neque quis ut ea ex.</p><p>Est sed non est. Magnam nihil nihil fuga nisi ut. Rerum et placeat consectetur porro facere minus non. Eligendi eaque et quisquam.</p><p>Harum vero qui quam incidunt sed laudantium rerum. Voluptatum dolorum nisi error quaerat. Esse minima blanditiis magnam aut. Sit suscipit autem fugit reprehenderit nemo et.</p><p>Velit culpa suscipit delectus molestiae quae quam. Id est nulla vitae molestiae similique placeat commodi. Et repellendus et vel repellat minima et molestiae ea.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(10, 1, 1, 'Autem consequatur at enim occaecati illum.', 'architecto-quia-dolorem-cupiditate-est-et-corporis-quo-blanditiis', NULL, 'Repellendus aut exercitationem adipisci sit saepe. Cum reiciendis adipisci quam accusantium omnis quae ipsa. Non sit ipsum provident ut vitae ad qui. Architecto odit reiciendis ea voluptas.', '<p>Ea dolor sapiente nam aut consectetur voluptas reprehenderit. Voluptatem est quibusdam quo officia totam consequuntur corrupti minima. Deleniti quia veritatis voluptatem aperiam et. Et in a quam aut soluta. Earum nam non nisi esse qui recusandae voluptatum in.</p><p>Repellat sit consectetur cum fuga sapiente. Sint quasi magni commodi assumenda rem facere. Quo et omnis rem aliquid in excepturi. Et aut delectus molestiae eius.</p><p>Sit et nulla suscipit commodi rerum molestiae in. Rem velit et vitae illo. Adipisci quia distinctio eos esse excepturi.</p><p>Asperiores velit eveniet rerum dicta. Repellat aut consequatur earum occaecati impedit id. Sint sit quam error excepturi error ut temporibus inventore. Nesciunt et quas qui vitae voluptatum.</p><p>Quia porro corrupti enim in qui ducimus corrupti. Odit sed adipisci consectetur perferendis qui saepe. Aut possimus pariatur voluptatibus enim quae quia. Nulla quis amet reiciendis aut sint amet repudiandae dolor. Sed natus et cumque inventore qui.</p><p>Animi nam ut et pariatur a incidunt omnis. Iste voluptatem possimus at aut perspiciatis. Pariatur voluptate aut id quasi reprehenderit ut. Ab consequatur animi molestias velit ex commodi eveniet.</p><p>Earum debitis beatae velit quis omnis optio doloribus. Corrupti assumenda architecto sit quibusdam ipsam. Voluptatem quos consectetur voluptates ipsam.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(11, 2, 1, 'Cumque omnis.', 'voluptas-occaecati-sequi-est-enim-est', NULL, 'Assumenda quod itaque velit accusantium ut asperiores eum. Illum doloremque laboriosam blanditiis voluptate sit id sed. Esse fugiat nulla libero officiis tempore. Magnam aliquam illo facilis placeat et.', '<p>Quasi alias exercitationem quam dolore. Autem occaecati porro voluptatibus sed qui aut rerum. Et minus non inventore qui ullam iusto consequatur.</p><p>Sint impedit quae aperiam laboriosam sequi hic facilis. Sed officiis ea nisi officiis nulla sequi. Sunt velit architecto et quia non.</p><p>Aperiam ipsam doloribus hic autem porro commodi assumenda. Dolor repellat ipsam odit similique voluptatem architecto. Modi commodi dolore nisi atque doloremque. Hic possimus deleniti qui in.</p><p>Repellat et nihil odio facilis minima consequuntur dolor vitae. Nobis velit delectus rerum voluptatem. Placeat nobis quo quam exercitationem nostrum ea.</p><p>Officia enim veniam veritatis voluptatibus quo. Consequatur repudiandae consequatur beatae. Libero numquam iure et magni et molestias.</p><p>Sit dolor minima blanditiis quo atque. Expedita amet ipsam qui. Ex nisi magni beatae molestiae. Voluptates quisquam quia excepturi.</p><p>Vel impedit vitae ducimus porro omnis dolore. Distinctio qui est earum tempore placeat a. Nam quis nihil dolores ut quis. Accusantium fuga sunt dolores et excepturi ut illum.</p><p>Sapiente et doloremque est et et ut. Ipsum rerum voluptas dolore architecto quos. Deserunt itaque omnis explicabo et natus quae enim.</p><p>Distinctio quasi est in id molestiae rerum vitae. Sed fuga porro in officiis corporis consequuntur. Dolore quis dignissimos nisi est. Et vero enim ut perspiciatis eligendi et.</p><p>Voluptas error rerum numquam qui exercitationem. Eligendi iusto optio voluptatem et libero aut iure. Ut asperiores nostrum minima.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(12, 1, 1, 'Molestiae vel.', 'minima-soluta-hic-adipisci-quasi', NULL, 'Eum dolor ab suscipit quo dolorum. Autem at voluptatem hic enim odio. Ipsum aliquid consequatur mollitia ullam voluptatem provident exercitationem.', '<p>Ut itaque pariatur iure voluptas possimus et temporibus. Inventore nulla maiores aut tempore.</p><p>Quo molestiae repudiandae minus. Consequatur recusandae dolor quos illo. Nemo assumenda et cum dolore ex quos nihil.</p><p>Quia corrupti impedit quia sunt doloribus tempora voluptate. Sed facere sunt cum ducimus. Illo doloremque quo cumque explicabo.</p><p>Odio natus quae hic eaque. Earum animi pariatur et autem magni. Et pariatur cumque quis pariatur ullam quam quia dolorum. Qui quisquam aut quas iste. Ea voluptas enim accusantium illum.</p><p>Qui consequatur fugit deserunt fugiat quibusdam qui reiciendis. Molestiae quia et consequatur exercitationem aspernatur. Enim autem quae est minus. Sint ut facere deleniti facere.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(13, 1, 1, 'Nulla assumenda sint modi saepe assumenda voluptas.', 'tempore-quo-ex-aut-magni', NULL, 'Ipsa autem ea aspernatur quia vel. Aliquam necessitatibus et nihil eum sunt corrupti sunt. Voluptas aliquid consectetur animi nulla a fugit architecto.', '<p>Aperiam odio sed rerum perspiciatis. Aperiam dolores quod nihil quas et et odio. Suscipit est nam mollitia et quos.</p><p>Tenetur consequatur natus corrupti exercitationem sapiente. Ea maxime omnis neque accusantium velit doloremque qui quasi. Quisquam sint voluptatem hic sed.</p><p>Odit omnis dicta beatae maxime ad iusto sed. Dolorum ut repellat est et eum qui ea. Est porro modi officiis alias.</p><p>Necessitatibus ut aut iusto pariatur. Esse doloremque inventore facere sunt tempora aut delectus. Ut hic autem magnam vero magni quas aut voluptatem. Rerum ut consectetur qui aliquam.</p><p>Quas quo inventore laudantium ab quo et praesentium. Autem ducimus sequi possimus est optio quibusdam. Veritatis officiis culpa qui sint incidunt.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(14, 1, 1, 'Nostrum amet nihil dolores.', 'vel-culpa-dolorum-ipsa-molestiae-pariatur-et-ea', NULL, 'Blanditiis cumque harum illo. Natus ullam minima ex similique aut doloribus. Error ipsam ex nobis voluptatibus nam iure.', '<p>Quae soluta illum molestias. Vero voluptatem et itaque. Nemo adipisci nostrum aut ullam laborum.</p><p>Non voluptate sint natus molestiae. Totam magni eos error. Accusantium voluptatem iste ut dicta ipsam sit. Sint minus ab velit ullam aut. Vel dignissimos rerum fugiat voluptatem laudantium.</p><p>Et et id esse ipsa quas qui. Exercitationem provident in eum accusantium. Voluptas perspiciatis inventore aliquid nobis. Perspiciatis veniam atque aut a iste.</p><p>Iste numquam id perferendis eveniet repellat quia. Dolorem explicabo dolore nobis magnam illum et dolor reprehenderit. Ut consequuntur odit ratione non maiores ea ipsam.</p><p>Natus nihil consequuntur et ipsam. Consequatur at id reiciendis iste velit nulla quidem. Quia voluptas consequatur et consequatur quibusdam eum voluptas.</p><p>Voluptas eveniet veniam fugit iusto modi. Et ullam sit dolor temporibus recusandae. Tenetur reiciendis cum sed aut ut neque.</p><p>Sequi nihil beatae qui reiciendis magnam recusandae voluptatem adipisci. Ipsum dolor et suscipit. In excepturi corrupti omnis atque. Eum quae minus occaecati sunt eos officiis repellendus. Aliquid repudiandae et est consequatur.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57'),
(15, 3, 1, 'Qui rerum exercitationem vel provident ea quis.', 'rerum-fuga-maxime-commodi-ullam-dolores-accusamus-magni', NULL, 'Aperiam perferendis id voluptas aut non neque explicabo. Minus qui ut eveniet. Impedit assumenda pariatur nobis sed debitis. Commodi quis facere sequi corporis.', '<p>Sit repellat sapiente quas aut. Ipsa nulla aut voluptas est magni eum dolorum. Dolorum ad iste vel et doloribus. Et maiores alias fugiat tempore incidunt quod quis dolor.</p><p>Repellendus beatae commodi et expedita ea quos est. Pariatur sed unde nemo commodi voluptatibus odio autem. Doloremque deleniti nesciunt ut doloremque sit nihil et. Est in autem incidunt delectus rerum. Molestias rem fugit debitis et ut doloribus.</p><p>Provident earum molestiae omnis temporibus veritatis itaque. Quibusdam beatae aperiam tenetur. Enim perspiciatis eligendi reiciendis ut ab. Sit sint earum alias facere.</p><p>Voluptas nesciunt est iste consectetur. Enim unde eos pariatur nisi labore dolor. Dolorem corrupti debitis vero tempora id ipsum veritatis dicta. Blanditiis est illum molestiae eveniet suscipit. Est reiciendis vero quae incidunt et vel nostrum.</p><p>Ut aut recusandae corporis sunt et et. Rem aspernatur pariatur porro iusto cum quia dolorum. Nulla nostrum omnis et tempore sint voluptatem. Dolorem repudiandae atque impedit vel sed.</p><p>Odit ullam beatae minima aut voluptas repellendus sit. Sunt repellendus voluptas neque quas aperiam qui amet sint. Repellat voluptatem impedit minus quasi.</p><p>Eum sunt recusandae esse dolorem quia similique deserunt est. Consequatur nobis tempora recusandae et. Quisquam porro qui et aperiam velit ea iste. Aut unde reiciendis non.</p><p>Illo est dolores nobis temporibus et quibusdam et. Sit ea rerum distinctio nesciunt. Velit voluptas aspernatur nesciunt illum. Veritatis dolore dignissimos repellendus non.</p><p>Corrupti reiciendis autem sapiente sit quasi cupiditate atque. Modi enim quis omnis ut rerum. Quia aut architecto non id. Voluptatem in qui a impedit omnis in.</p>', NULL, '2022-09-21 19:07:57', '2022-09-21 19:07:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prospects`
--

CREATE TABLE `prospects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `prospects`
--

INSERT INTO `prospects` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `body`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Android Developer', 'et-earum-animi-voluptatem-sequi', 'prospect-images/EIyShCmX454QLjUTHea88wPxIUteMdyecevWEqmZ.jpg', '<div>Error est fugiat laboriosam non ullam. Ut consequuntur nostrum omnis enim eum. Itaque vitae ad nihil ut.<br><br></div><div>Accusantium commodi dicta suscipit repellat commodi mollitia mollitia. Dicta quis nulla doloribus perspiciatis dolorem.<br><br></div><div>Quaerat et tempora aut ut odit ratione. Magnam autem totam quia et aliquid qui. Repudiandae enim impedit perspiciatis. Vero unde quia inventore aut consequatur voluptas et tenetur. Nesciunt non ut nemo maxime qui porro ad.<br><br></div><div>Laboriosam consequuntur aut amet ipsam. Natus nisi quia et numquam illo nobis quidem. Ut iste suscipit ducimus voluptatem corrupti voluptatem. Fuga dolorum est in ex neque error in. Hic molestiae iure sint.<br><br></div><div>Dicta dolor dolores omnis asperiores qui. Sunt nihil rerum est adipisci sit error. Provident sit voluptatem dolores iusto hic.<br><br></div><div>Atque perferendis vel porro omnis vitae ab praesentium. Voluptate ratione blanditiis qui repellat omnis ab enim. Id distinctio ut ex velit eos.<br><br></div>', '2022-09-21 19:07:57', '2022-09-21 19:12:18'),
(2, 2, 1, 'Software Engineer', 'quidem-enim-occaecati-sed-vel', 'prospect-images/sgHwZWgtZOjVRCyDsU07PAVsLtRzy5QD7uFj6uwz.jpg', '<div>Omnis eius doloribus ut non dicta qui. Consequatur veniam molestiae molestiae non est. Aperiam asperiores velit accusamus soluta veniam. Quia et minus quia et expedita. Nobis esse ullam nostrum omnis.<br><br></div><div>Voluptatem cumque cupiditate et et accusamus et recusandae. Molestiae maxime reiciendis porro qui id.<br><br></div><div>Aut veniam excepturi rem quos repellat nulla fugit beatae. Adipisci sunt et vero nam quia qui. Sequi quisquam vitae molestias non veritatis deserunt.<br><br></div><div>Rem illum rerum in. Nesciunt at ratione non suscipit rerum praesentium. Quaerat nesciunt asperiores aut enim.<br><br></div><div>Nam hic quasi et omnis. Mollitia architecto consequuntur nulla nemo. Voluptatem ipsum ipsum quasi suscipit aspernatur.<br><br></div><div>At a sit eligendi iste. Nulla necessitatibus et laborum labore quasi voluptas. Temporibus distinctio ipsam blanditiis voluptas minus quidem.<br><br></div><div>Corrupti cupiditate alias optio aut enim quia. Unde dolor quia veniam veritatis magnam tempore quaerat nostrum. Velit eveniet voluptas ipsam adipisci aut quasi.<br><br></div><div>Magnam unde soluta qui deleniti. Molestias ratione et accusamus non distinctio ad. Veritatis vel perspiciatis voluptatem. Blanditiis odio rerum quia amet.<br><br></div><div>Accusantium molestias quis et rerum unde. Vel quae sint praesentium vero.<br><br></div>', '2022-09-21 19:07:58', '2022-09-21 19:12:40'),
(3, 3, 1, 'Database Administrator', 'qui-assumenda-et-repudiandae-dignissimos-reiciendis-praesentium', 'prospect-images/6J1kdRqmGjcoNgjt9QJ9nREsNFHZziw0QRfe5m6q.jpg', '<div>Suscipit delectus quis non maiores animi. Sit et sed quasi veniam sapiente et. Minima nihil incidunt officiis eveniet ex asperiores. Quae minima voluptatem velit quisquam hic voluptatem quidem explicabo.<br><br></div><div>Aut voluptatem eaque accusamus libero. Omnis porro et assumenda accusantium placeat sit. Magni omnis iusto quia corrupti et qui est. Laborum voluptatem velit atque et natus voluptas.<br><br></div><div>Praesentium sint repellendus ipsam minima ad. Et officiis saepe repellendus ea. In dolorum et facere sed voluptas pariatur rerum. Occaecati doloribus quibusdam nobis velit.<br><br></div><div>Quo temporibus est itaque neque et quis. Minima sit in quibusdam id est magnam quidem. Quia repellendus corporis dicta inventore.<br><br></div><div>Aliquid deserunt labore alias exercitationem id nostrum nulla. Aut eaque neque assumenda tempora repudiandae veritatis. Eveniet quibusdam aperiam maiores.<br><br></div><div>Maxime voluptatibus placeat beatae at minus qui. Aut qui praesentium tempora. Earum fuga beatae sequi et explicabo nihil magnam.<br><br></div><div>Qui ut nesciunt voluptate quia non cupiditate quidem. Laboriosam asperiores qui ipsam vitae ea. Dolorem voluptas quod quam cum fugit a. Aliquid inventore at minus beatae architecto maiores unde. Similique iusto accusamus in sed consequatur aspernatur.<br><br></div><div>Sint voluptatem sit dolor aut. Non et et minus magnam illum et. Et nostrum aperiam aperiam velit.<br><br></div><div>Voluptatibus est enim et. Vero est at quidem at voluptas rerum. Consequuntur iusto commodi enim distinctio excepturi expedita voluptas.<br><br></div>', '2022-09-21 19:07:58', '2022-09-21 19:13:21'),
(4, 2, 1, 'Game Developer', 'quos-enim-impedit-consequuntur', 'prospect-images/35vHWJkrjRMfJBToU2kuBGstpqNUGsVZqThbXUtU.jpg', '<div>Tempore in provident in culpa. Voluptas perspiciatis sit accusantium eos id. Nobis voluptatum aut sed harum. Aut odio unde blanditiis asperiores blanditiis minus est.<br><br></div><div>Et odit accusamus a qui sit. Doloremque esse voluptatibus in aut quia autem. Tempora beatae est et dolor excepturi laborum.<br><br></div><div>Mollitia quibusdam ipsa et perferendis et rerum. Quaerat neque temporibus sapiente praesentium. Similique illum maxime nihil eos vel minima similique.<br><br></div><div>Quos tenetur necessitatibus est incidunt sapiente quo. Labore ut pariatur voluptatibus nisi. Ut sit libero est quae sequi veritatis perspiciatis.<br><br></div><div>Quis sunt ad veniam ut nisi a. Iure natus reiciendis voluptatum culpa iusto porro. Officiis maxime sequi voluptas omnis et voluptatem.<br><br></div><div>Est asperiores ea voluptatem reprehenderit doloremque. Dignissimos animi autem in consequatur non dignissimos omnis. Aspernatur quidem dolorem quisquam velit repellendus.<br><br></div><div>Et animi eum modi. Suscipit et iure aut sed magnam et. Quia dignissimos odio voluptatum sunt quia. Fugiat illum labore rerum non eius facilis eaque tempore.<br><br></div><div>Accusamus ipsa qui beatae molestias maiores quod labore. Iste aliquam omnis dolorem excepturi similique. Blanditiis occaecati et quod asperiores ipsum perferendis. Nemo illo unde in repellat.<br><br></div><div>Autem quia voluptatem voluptatem illum saepe numquam. Voluptatem non dolorum et. Velit voluptas dignissimos repellat quas aliquam. Autem error vitae sit doloremque.<br><br></div><div>Nihil exercitationem eos laboriosam dolorem nulla. Voluptatem porro sit est aut et incidunt. Tempora est vitae aliquam. Tenetur odio sit enim assumenda similique nemo non.<br><br></div>', '2022-09-21 19:07:58', '2022-09-21 19:13:50'),
(5, 3, 1, 'Web Developer', 'rerum-voluptatem-minus-alias-pariatur-magnam-laboriosam-molestiae', 'prospect-images/zmtOU1th2DiAFUVWdv07tWUctmwXfyvvpsStYr54.jpg', '<div>Commodi sint minus est numquam quia cum incidunt qui. Laborum doloribus non explicabo labore. Adipisci et voluptates in sunt ut aut dolore. Ut iste at omnis quaerat non vel.<br><br></div><div>Eveniet dolorum repudiandae natus eaque. Et nostrum temporibus adipisci ut nam nam. Suscipit possimus praesentium iusto deleniti quia cum. Qui excepturi et et sit doloremque eligendi.<br><br></div><div>Rerum accusantium similique perferendis perspiciatis laudantium odio illum. Doloribus non similique sit. Quis corrupti inventore sunt commodi molestiae aut. Veritatis occaecati dolorum voluptatem ratione velit iusto.<br><br></div><div>Unde veritatis molestias tenetur qui. Error quidem expedita omnis itaque. Est magni laudantium facilis minima cum vel unde ea.<br><br></div><div>Ipsa dolor quia eum incidunt quod vitae illo. Qui et rem vero tempore aut occaecati hic. Non nesciunt omnis libero tempora qui. Itaque earum necessitatibus voluptatum ut ut autem quaerat.<br><br></div><div>Nemo illo qui similique. Odit a nobis qui. Qui beatae illo sapiente aut. Eos vitae enim pariatur ea doloremque dolores adipisci.<br><br></div><div>Minima est eveniet deleniti quibusdam est. Ipsa qui et molestiae quia dolor veniam. Ab quo quia temporibus quia. Dolore ut et est consequatur quisquam eaque veniam.<br><br></div><div>Modi voluptates fuga modi laudantium eum. Eos ut fugiat aliquam qui et doloribus. Exercitationem tenetur totam dolor.<br><br></div><div>Voluptas et eligendi ut omnis at hic numquam temporibus. Dicta et quis et aut. Voluptatum minima sed quidem.<br><br></div>', '2022-09-21 19:07:58', '2022-09-21 19:14:10'),
(6, 1, 1, 'Security System', 'Security System', 'prospect-images/WZOqsglYH4j71FXzxpFmuIaIqXppYGPqvEtNMQpX.jpg', '<div>Commodi sint minus est numquam quia cum incidunt qui. Laborum doloribus non explicabo labore. Adipisci et voluptates in sunt ut aut dolore. Ut iste at omnis quaerat non vel.<br><br></div><div>Eveniet dolorum repudiandae natus eaque. Et nostrum temporibus adipisci ut nam nam. Suscipit possimus praesentium iusto deleniti quia cum. Qui excepturi et et sit doloremque eligendi.<br><br></div><div>Rerum accusantium similique perferendis perspiciatis laudantium odio illum. Doloribus non similique sit. Quis corrupti inventore sunt commodi molestiae aut. Veritatis occaecati dolorum voluptatem ratione velit iusto.<br><br></div><div>Unde veritatis molestias tenetur qui. Error quidem expedita omnis itaque. Est magni laudantium facilis minima cum vel unde ea.<br><br></div><div>Ipsa dolor quia eum incidunt quod vitae illo. Qui et rem vero tempore aut occaecati hic. Non nesciunt omnis libero tempora qui. Itaque earum necessitatibus voluptatum ut ut autem quaerat.<br><br></div><div>Nemo illo qui similique. Odit a nobis qui. Qui beatae illo sapiente aut. Eos vitae enim pariatur ea doloremque dolores adipisci.<br><br></div><div>Minima est eveniet deleniti quibusdam est. Ipsa qui et molestiae quia dolor veniam. Ab quo quia temporibus quia. Dolore ut et est consequatur quisquam eaque veniam.<br><br></div><div>Modi voluptates fuga modi laudantium eum. Eos ut fugiat aliquam qui et doloribus. Exercitationem tenetur totam dolor.<br><br></div><div>Voluptas et eligendi ut omnis at hic numquam temporibus. Dicta et quis et aut. Voluptatum minima sed quidem.</div>', '2022-09-21 19:14:50', '2022-09-21 19:14:50'),
(7, 1, 1, 'IT Executive', 'IT Executive', 'prospect-images/CsU93Sf1OkxHoVAx8dgI5kbSvhFp2gSCilAXt4lm.jpg', '<div>Commodi sint minus est numquam quia cum incidunt qui. Laborum doloribus non explicabo labore. Adipisci et voluptates in sunt ut aut dolore. Ut iste at omnis quaerat non vel.<br><br></div><div>Eveniet dolorum repudiandae natus eaque. Et nostrum temporibus adipisci ut nam nam. Suscipit possimus praesentium iusto deleniti quia cum. Qui excepturi et et sit doloremque eligendi.<br><br></div><div>Rerum accusantium similique perferendis perspiciatis laudantium odio illum. Doloribus non similique sit. Quis corrupti inventore sunt commodi molestiae aut. Veritatis occaecati dolorum voluptatem ratione velit iusto.<br><br></div><div>Unde veritatis molestias tenetur qui. Error quidem expedita omnis itaque. Est magni laudantium facilis minima cum vel unde ea.<br><br></div><div>Ipsa dolor quia eum incidunt quod vitae illo. Qui et rem vero tempore aut occaecati hic. Non nesciunt omnis libero tempora qui. Itaque earum necessitatibus voluptatum ut ut autem quaerat.<br><br></div><div>Nemo illo qui similique. Odit a nobis qui. Qui beatae illo sapiente aut. Eos vitae enim pariatur ea doloremque dolores adipisci.<br><br></div><div>Minima est eveniet deleniti quibusdam est. Ipsa qui et molestiae quia dolor veniam. Ab quo quia temporibus quia. Dolore ut et est consequatur quisquam eaque veniam.<br><br></div><div>Modi voluptates fuga modi laudantium eum. Eos ut fugiat aliquam qui et doloribus. Exercitationem tenetur totam dolor.<br><br></div><div>Voluptas et eligendi ut omnis at hic numquam temporibus. Dicta et quis et aut. Voluptatum minima sed quidem.</div>', '2022-09-21 19:15:34', '2022-09-21 19:15:34'),
(8, 1, 1, 'SEO Specialist', 'SEO Specialist', 'prospect-images/WqKpMKa11GTWlGWnnes99z3OTA2w1ZzqQ50qJQ7l.jpg', '<div>Commodi sint minus est numquam quia cum incidunt qui. Laborum doloribus non explicabo labore. Adipisci et voluptates in sunt ut aut dolore. Ut iste at omnis quaerat non vel.<br><br></div><div>Eveniet dolorum repudiandae natus eaque. Et nostrum temporibus adipisci ut nam nam. Suscipit possimus praesentium iusto deleniti quia cum. Qui excepturi et et sit doloremque eligendi.<br><br></div><div>Rerum accusantium similique perferendis perspiciatis laudantium odio illum. Doloribus non similique sit. Quis corrupti inventore sunt commodi molestiae aut. Veritatis occaecati dolorum voluptatem ratione velit iusto.<br><br></div><div>Unde veritatis molestias tenetur qui. Error quidem expedita omnis itaque. Est magni laudantium facilis minima cum vel unde ea.<br><br></div><div>Ipsa dolor quia eum incidunt quod vitae illo. Qui et rem vero tempore aut occaecati hic. Non nesciunt omnis libero tempora qui. Itaque earum necessitatibus voluptatum ut ut autem quaerat.<br><br></div><div>Nemo illo qui similique. Odit a nobis qui. Qui beatae illo sapiente aut. Eos vitae enim pariatur ea doloremque dolores adipisci.<br><br></div><div>Minima est eveniet deleniti quibusdam est. Ipsa qui et molestiae quia dolor veniam. Ab quo quia temporibus quia. Dolore ut et est consequatur quisquam eaque veniam.<br><br></div><div>Modi voluptates fuga modi laudantium eum. Eos ut fugiat aliquam qui et doloribus. Exercitationem tenetur totam dolor.<br><br></div><div>Voluptas et eligendi ut omnis at hic numquam temporibus. Dicta et quis et aut. Voluptatum minima sed quidem.</div>', '2022-09-21 19:16:07', '2022-09-21 19:16:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `startups`
--

CREATE TABLE `startups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `startups`
--

INSERT INTO `startups` (`id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 'Unicorn', 'aperiam-distinctio-quam-perspiciatis-quia', 'startup-images/EjsZ4fVhtKZc7KyzFYgZTeO0djfFC6vKnDZcCcLi.jpg', 'Omnis porro quaerat omnis vel non. Laboriosam accusamus aut fugiat impedit. Voluptas dolores nulla omnis id laudantium similique et enim.Laudantium ducimus sapiente architecto quia et eos. Nobis saepe...', '<div>Omnis porro quaerat omnis vel non. Laboriosam accusamus aut fugiat impedit. Voluptas dolores nulla omnis id laudantium similique et enim.<br><br></div><div>Laudantium ducimus sapiente architecto quia et eos. Nobis saepe voluptas alias aliquam. Cum distinctio possimus sapiente qui ab id.<br><br></div><div>Laborum repudiandae dolorum earum eaque. Ratione soluta officiis quod voluptatem cum maiores magnam. Dicta eos laborum vel voluptate et incidunt.<br><br></div><div>Et et tempora molestiae libero dolorum minima. Vitae amet accusamus reprehenderit odio sit veniam inventore. Suscipit sed rerum inventore non dignissimos magni.<br><br></div><div>Ea et voluptatem consequatur. Vel libero quo soluta possimus expedita officiis deleniti. Qui minus molestiae voluptas tenetur aliquam pariatur consectetur voluptatem.<br><br></div><div>Harum rerum ab voluptatibus accusantium quia explicabo. Tempore voluptas ab ipsam impedit error voluptas ea. Sit vel vel autem iusto rem. Sunt nihil fuga dignissimos quaerat.<br><br></div><div>Architecto accusantium accusamus totam alias dignissimos maiores. Vel quia harum doloremque neque.<br><br></div><div>Quas qui animi asperiores voluptas cum et. Sed necessitatibus nesciunt dolor ipsum rerum. In ut sint eum assumenda magni eius optio quia.<br><br></div><div>Sunt qui sit quaerat voluptatum laboriosam quia. Labore tempore praesentium amet fugiat. Eius velit veniam saepe in distinctio voluptatum. Error iure enim vero ratione et ut.<br><br></div><div>Culpa similique molestiae temporibus numquam nihil in ad. Eligendi vel magnam sed fuga incidunt sit qui atque.<br><br></div><div>Magnam cupiditate cupiditate tempora doloremque. Omnis nam numquam quibusdam inventore iste nesciunt dolor. Accusamus et non sequi corrupti non. Quaerat hic nihil amet eum ullam numquam est.<br><br></div><div>Et praesentium omnis fugit error hic atque. Rem possimus cumque beatae culpa. Ut aut quis animi iusto aspernatur dicta.<br><br></div>', '2022-09-21 19:07:58', '2022-09-21 19:16:46'),
(2, 1, 'Decacorn', 'dolorem-et-minima-fugit-aut-iusto-reiciendis', 'startup-images/ywN0gqBfEB1dVFIAmTEJ31wRdxjPHLHB7DeXO9a5.jpg', 'Repellendus qui sunt quod accusamus. Velit ipsum eum cupiditate et. Occaecati eum nemo numquam sunt qui. Quod quos deserunt unde quasi neque fugiat.Et repudiandae libero asperiores maiores. Et asperio...', '<div>Repellendus qui sunt quod accusamus. Velit ipsum eum cupiditate et. Occaecati eum nemo numquam sunt qui. Quod quos deserunt unde quasi neque fugiat.<br><br></div><div>Et repudiandae libero asperiores maiores. Et asperiores aut rem distinctio voluptas eveniet et. Qui adipisci eum et eum.<br><br></div><div>Rerum beatae qui qui voluptatum fugit numquam. Inventore dolorem voluptas aut rem laboriosam voluptates. Dignissimos excepturi sint id inventore et. Voluptates et non aperiam distinctio.<br><br></div><div>Doloremque consectetur quis ut dolorum consequuntur. Labore tempore sint quasi qui non. Repellat veniam officiis voluptas quasi nam quidem qui corporis. Amet delectus molestiae rerum sed maiores expedita magni exercitationem.<br><br></div><div>Aperiam debitis vero molestiae quo et pariatur accusamus. Id rem est architecto qui aliquid magnam et qui. Earum molestias dolorem distinctio sit.<br><br></div><div>Et eum magni in hic cumque quae. Temporibus officiis nam sed occaecati excepturi facere distinctio. Sint officiis nisi quisquam doloribus ut consequatur. Et similique omnis quia deleniti autem eum aut.<br><br></div><div>Sed veniam est atque saepe nobis. Eaque reiciendis perferendis fugiat assumenda placeat itaque quam.<br><br></div><div>Molestiae voluptatum alias pariatur. Assumenda aut pariatur quia illo minus. Officia qui sunt dicta rem. Ab iure facere qui eaque facere eos.<br><br></div><div>Officiis deleniti cupiditate est quam praesentium quis omnis. Ipsa ex maxime eius officia voluptates occaecati. Quo voluptas quia provident et.<br><br></div><div>Molestias neque sit sit tempore. Voluptatum ullam temporibus aliquam et est. Recusandae vel quis ea. Voluptatem aliquam ipsa fuga voluptatibus omnis.<br><br></div><div>Ut cumque perspiciatis non dicta id est. Nihil qui quaerat labore dolore reprehenderit ab. Quidem voluptatem nihil ratione tempora. Veniam deleniti animi numquam et laudantium.<br><br></div><div>Quia consectetur voluptas quasi consectetur. Eum iusto labore non perferendis voluptates. Eaque minima quae et harum est.<br><br></div>', '2022-09-21 19:07:58', '2022-09-21 19:16:59'),
(3, 1, 'Hectocorn', 'cumque-iure-minus-accusantium-itaque-est-omnis-est', 'startup-images/gh2WxFCWI2uBu3Hiam2Gv2KE08NSq0nlKzqCLFMV.jpg', 'Soluta consequatur repudiandae reiciendis. Doloribus ipsa magnam quae. Qui saepe et fuga id cupiditate unde quas aut.Eveniet ex hic saepe nisi et cumque. Odio molestias temporibus necessitatibus et. R...', '<div>Soluta consequatur repudiandae reiciendis. Doloribus ipsa magnam quae. Qui saepe et fuga id cupiditate unde quas aut.<br><br></div><div>Eveniet ex hic saepe nisi et cumque. Odio molestias temporibus necessitatibus et. Rem aut et ut non assumenda iste.<br><br></div><div>Voluptas dolor et omnis at eligendi. Labore autem reiciendis voluptatem aut et. Voluptatum qui consequatur facere possimus.<br><br></div><div>Dolorum hic harum facere aut quis laborum. Dignissimos nemo aperiam ipsam iusto consequatur ab quis. Commodi ullam incidunt earum beatae vitae aut odio. Incidunt et distinctio nam vitae voluptatem excepturi.<br><br></div><div>Omnis et cupiditate sit alias. Facere velit harum explicabo blanditiis dignissimos temporibus. Saepe quibusdam quo tempore dignissimos explicabo occaecati. Earum autem ad vel.<br><br></div><div>Veritatis rerum at eligendi illum cumque et et consequatur. Illo ipsum nihil molestiae voluptas consequatur vitae et. Sunt ullam molestiae quam totam vel.<br><br></div><div>Non ipsam porro tempore aliquam accusantium adipisci aut. Consequatur iusto maxime necessitatibus cupiditate. Qui qui cum labore. Non nobis quibusdam quidem doloremque.<br><br></div>', '2022-09-21 19:07:58', '2022-09-21 19:17:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sukron Anugrah', 'Sukron', 'sukron@gmail.com', NULL, '$2y$10$4NiZ2EbXM4m9fKXWzwJf0eWAZW.5Kwhxfd2TTdA0g/ub2nnKXkKW2', NULL, '2022-09-21 19:07:56', '2022-09-21 19:07:56'),
(2, 'Suneo', 'Suneo', 'Suneo@gmail.com', NULL, '$2y$10$hz.UFWT642kM3.yp97FYxursFi5Lb4Pj.GJTSzrPgiC15DmokIN9q', NULL, '2022-09-21 19:33:31', '2022-09-21 19:33:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobbrief` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `placement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `works`
--

INSERT INTO `works` (`id`, `user_id`, `title`, `slug`, `image`, `jobbrief`, `requirements`, `placement`, `deadline`, `created_at`, `updated_at`) VALUES
(1, 1, 'Software Tester', 'dolor-laboriosam-expedita-qui-et-placeat', 'work-images/os9xxzVdnJg0gaIfAjvp0IpUoBXELUxikg91N2ep.jpg', '<div>Voluptatem facilis quis vel et sapiente qui. Corrupti repudiandae dolores quia laboriosam architecto voluptatem. Voluptatum explicabo quaerat quasi nobis voluptate. Reiciendis veritatis nisi consequatur neque. Non hic nostrum impedit necessitatibus repudiandae et aut odit.</div>', '<div>Job Description</div><div>1. Melakukan Proses Data Entry<br>Tugas pertama dari seorang admin priyek adalah melakukan proses data entry. Data yang dimansukkan adalah data yang berkaitan dengan segala hal di dalam proyek. Harus ada pendataan yang jelas dan terorganisir di dalam komputer yang dikelola oleh seorang administrasi proyek baik itu dari segi tanggal, nama data, penanggung jawab, dan banyak hal lain. Hal ini bertujuan agar data tersebut bisa segera diakses sebagai bahan rujukan apabila terdapat kesalahan dalam proses proyek konstruksi yang berlangsung.<br><br>2. Melakukan Sesi Dokumentasi<br>Tugas kedua dari seorang admin proyek adalah melakukan proses dokumentasi. Perlu anda tahu, proses dokumentasi ini harus berjalan secara faktual dan tidak terlambat. Dokumentasi hari itu harus dilakukan hari itu juga agar proses dalam proyek terlihat secara signifikan. Lebih jauhnya perlu anda ketahui kalau proses dokumentasi ini tidak hanya berbentuk dokumentasi foto saja melainkan juga data data dan media lainnya seperti misalkan video dan tanda tangan dari orang orang yang berkaitan dengan dokumentasi tersebut.<br><br>3. Menjaga dan Mengecek Inventory Kantor<br>Selanjutnya seorang admin proyek juga memiliki tugas sebagai penjaga inventori dan aset perusahaan di proyek tempat dia bekerja. Setiap aset dan fasilitas perusahaan harus di cek dengan baik supaya tidak terjadi kesalahan dan atau kehilangan. Pastikan semua inventory dan aset di cek setiap pulang kerja, atau setidaknya anda memiliki bukti kalau aset tersebut sedang digunakan oleh pihak lain agar ada yang bertanggung jawab apabila terjadi kehilangan.<br><br>4. Mengecek Biaya Operasional dan Membuat Reiburstment Ke Pusat<br>Tugas selanjutnya yang harus dilakukan oleh sorang admin proyek adalah melakukan pengecekan dan validasi terhadap semua biaya pengeluaran di dalam kantor selama berada di proyek seperti misalnya biaya listrik (bila ada), biaya internet, pembelian ATK, dan beragam biasaya operasional lainnya yang mungkin muncul pada saat proyek dilaksanakan. Sebagai seorang admin proyek anda harus melakukan validasi terhadap data data yang diberikan oleh pegawai yang hendak melakukan reimburstment/klaim terhadap perusahaan. Jika terdapat data yang tidak memadai atau tidak akurat, anda bisa menolaknya. Setelah data data tersebut lengkap dan terpenuhi, selanjutnya anda hanya tinggal melakukan proses <em>reimburst</em> dengan mengirimkan <em>invoice</em> ke kantor pusat.<br><br>5. Membuat Surat Jalan<br>Tugas admin proyek selanjutnya adalah melakukan pembuatan surat jalan dan menerima surat jalan untuk segala kendaraan yang masuk ke atau dari proyek secara jelas. Biasanya untuk memaksimalkan pekerjaan ini anda harus berkoordinasi dengan pihak security yang berjaga di pintu masuk / keluar kendaraan.<br><br>6. Membuat Data Absensi dan Lembur<br>Lebih jauh, seringkali anda juga harus membuat data absensi dan lembur dari karyawan yang bertugas untuk memastikan kalau biaya perusahaan benar benar terintegrasi dengan baik dan tidak ada kesalahan disini. Biasanya hal ini yang seringkali menimbulkan konflik karena di dalam proyek, seringkali anda harus melakukan banyak koordinasi dengan pihak kedua atau ke tiga. Proyek biasanya dilakukan oleh berbagai pihak dan anda harus mengkoordinasikan hal ini dengan baik secara persuasif.<br><br>7. Membuat Laporan Mingguan/Bulanan<br>Hal selanjutnya yang harus anda lakukan adalah membuat laporan bulanan dan mingguan dari segala aktivitas proyek yang anda lakukan. Laporan ini harus ditandatangani oleh manajer proyek dan diketahu oleh pihak pihak yang berkaitan dengan proyek yang sedang berjalan.<br><br>8. Merapikan Dokumen Dan Membuat Salinan Dari Tiap Dokumen Yang Ada<br>membuat salinan dari tiap dokumen yang ada agar anda tidak berpotensi untuk kehilangan data data yang anda miliki. Anda juga harus merapikan dokumen dokumen tersebut agar bisa diakses dengan mudah bilamana sewaktu waktu dibutuhkan.</div>', 'Jakarta', '20 Desember 2022', '2022-09-21 19:07:58', '2022-09-21 19:19:35'),
(2, 1, 'Database Administrator', 'amet-laudantium-pariatur-in-explicabo-in-mollitia', 'work-images/LlqlvLoTAYEmmx4BS18xkAkTiCYAXNy95B0e7I0j.jpg', '<div>Quae sit fugiat ea non aut libero. Ea laboriosam nesciunt facere. Voluptas est rerum atque consectetur dolorem non sint atque. Ut dolorum velit porro iure recusandae.</div>', '<div>Sit atque eos mollitia. Veritatis est dolor minus. Rerum ea unde eum maiores velit qui. Et placeat veritatis est neque illo.<br><br></div><div>Laboriosam doloremque qui hic neque quae. Suscipit et velit reiciendis repellat inventore ipsum et earum. Dolorum quaerat iusto modi voluptatem facere incidunt enim. Voluptatum incidunt suscipit eaque cumque nisi dolor iure et. Earum nihil dolor harum saepe et vel odio.<br><br></div><div>Consequatur saepe cumque id assumenda illo facilis. Est qui assumenda in quia. Voluptatibus quo tempore non non ut harum quaerat. Nisi sunt recusandae quas dolorem voluptatem eveniet.<br><br></div><div>Soluta voluptatibus sit ea consequuntur sunt corporis. Consequatur voluptas qui omnis et dolorem officiis aut. Placeat optio dolor voluptates et adipisci. Reprehenderit neque temporibus in qui deleniti. Aliquam velit corrupti eum.<br><br></div><div>Quis voluptas repellat in sunt. Maiores soluta a iure qui aut. Nesciunt sunt iste aspernatur recusandae voluptate officiis in earum.<br><br></div><div>Eum animi accusamus ea eius sint. Saepe et expedita ipsum et. Assumenda occaecati delectus harum est ut voluptas sed.<br><br></div><div>Incidunt doloremque ea ut modi et ipsam distinctio. Aperiam deserunt repellendus voluptas laboriosam ut voluptatem nam.<br><br></div>', 'Serang', '20 Desember 2022', '2022-09-21 19:07:58', '2022-09-21 19:20:19'),
(3, 1, 'Web Developer', 'debitis-id-repudiandae-autem', 'work-images/dMbz4yjnnn32rKmJrSRtzHfqevINdIybR2OHu7DJ.jpg', '<div>Assumenda unde culpa et et doloribus ea dignissimos repellat. Et placeat ut eum aut adipisci numquam dolor voluptas. Nulla id aut similique sint quam. Nostrum ex neque aliquid aperiam sint eligendi.</div>', '<div>Job Description</div><div>1. Melakukan Proses Data Entry<br>Tugas pertama dari seorang admin priyek adalah melakukan proses data entry. Data yang dimansukkan adalah data yang berkaitan dengan segala hal di dalam proyek. Harus ada pendataan yang jelas dan terorganisir di dalam komputer yang dikelola oleh seorang administrasi proyek baik itu dari segi tanggal, nama data, penanggung jawab, dan banyak hal lain. Hal ini bertujuan agar data tersebut bisa segera diakses sebagai bahan rujukan apabila terdapat kesalahan dalam proses proyek konstruksi yang berlangsung.<br>2. Melakukan Sesi Dokumentasi<br>Tugas kedua dari seorang admin proyek adalah melakukan proses dokumentasi. Perlu anda tahu, proses dokumentasi ini harus berjalan secara faktual dan tidak terlambat. Dokumentasi hari itu harus dilakukan hari itu juga agar proses dalam proyek terlihat secara signifikan. Lebih jauhnya perlu anda ketahui kalau proses dokumentasi ini tidak hanya berbentuk dokumentasi foto saja melainkan juga data data dan media lainnya seperti misalkan video dan tanda tangan dari orang orang yang berkaitan dengan dokumentasi tersebut.<br>3. Menjaga dan Mengecek Inventory Kantor<br>Selanjutnya seorang admin proyek juga memiliki tugas sebagai penjaga inventori dan aset perusahaan di proyek tempat dia bekerja. Setiap aset dan fasilitas perusahaan harus di cek dengan baik supaya tidak terjadi kesalahan dan atau kehilangan. Pastikan semua inventory dan aset di cek setiap pulang kerja, atau setidaknya anda memiliki bukti kalau aset tersebut sedang digunakan oleh pihak lain agar ada yang bertanggung jawab apabila terjadi kehilangan.<br>4. Mengecek Biaya Operasional dan Membuat Reiburstment Ke Pusat<br>Tugas selanjutnya yang harus dilakukan oleh sorang admin proyek adalah melakukan pengecekan dan validasi terhadap semua biaya pengeluaran di dalam kantor selama berada di proyek seperti misalnya biaya listrik (bila ada), biaya internet, pembelian ATK, dan beragam biasaya operasional lainnya yang mungkin muncul pada saat proyek dilaksanakan. Sebagai seorang admin proyek anda harus melakukan validasi terhadap data data yang diberikan oleh pegawai yang hendak melakukan reimburstment/klaim terhadap perusahaan. Jika terdapat data yang tidak memadai atau tidak akurat, anda bisa menolaknya. Setelah data data tersebut lengkap dan terpenuhi, selanjutnya anda hanya tinggal melakukan proses <em>reimburst</em> dengan mengirimkan <em>invoice</em> ke kantor pusat.<br>5. Membuat Surat Jalan<br>Tugas admin proyek selanjutnya adalah melakukan pembuatan surat jalan dan menerima surat jalan untuk segala kendaraan yang masuk ke atau dari proyek secara jelas. Biasanya untuk memaksimalkan pekerjaan ini anda harus berkoordinasi dengan pihak security yang berjaga di pintu masuk / keluar kendaraan.<br>6. Membuat Data Absensi dan Lembur<br>Lebih jauh, seringkali anda juga harus membuat data absensi dan lembur dari karyawan yang bertugas untuk memastikan kalau biaya perusahaan benar benar terintegrasi dengan baik dan tidak ada kesalahan disini. Biasanya hal ini yang seringkali menimbulkan konflik karena di dalam proyek, seringkali anda harus melakukan banyak koordinasi dengan pihak kedua atau ke tiga. Proyek biasanya dilakukan oleh berbagai pihak dan anda harus mengkoordinasikan hal ini dengan baik secara persuasif.<br>7. Membuat Laporan Mingguan/Bulanan<br>Hal selanjutnya yang harus anda lakukan adalah membuat laporan bulanan dan mingguan dari segala aktivitas proyek yang anda lakukan. Laporan ini harus ditandatangani oleh manajer proyek dan diketahu oleh pihak pihak yang berkaitan dengan proyek yang sedang berjalan.<br>8. Merapikan Dokumen Dan Membuat Salinan Dari Tiap Dokumen Yang Ada<br>membuat salinan dari tiap dokumen yang ada agar anda tidak berpotensi untuk kehilangan data data yang anda miliki. Anda juga harus merapikan dokumen dokumen tersebut agar bisa diakses dengan mudah bilamana sewaktu waktu dibutuhkan.</div>', 'Cilegon', '02 Oktober 2022', '2022-09-21 19:07:58', '2022-09-21 19:22:31'),
(4, 1, 'Security System', 'et-quisquam-nostrum-provident-vel-qui-itaque', 'work-images/63mDLVQX1T1joJizZfgklO7zJy4ojmKuVlv5mUwh.jpg', '<div>Possimus aliquam omnis eius eum et fuga perferendis. Sint assumenda voluptas commodi adipisci cum officia magni veritatis. Voluptatem et aut quasi temporibus.</div>', '<div>Quo in iusto perspiciatis dolor mollitia asperiores natus incidunt. Ex aut et dolor expedita omnis vel. Debitis id dolor voluptas voluptatem commodi in laboriosam mollitia. Deserunt est praesentium error dolores illum quis dicta. Sapiente animi fuga qui ut quas omnis.<br><br></div><div>Nulla est consequatur veritatis non accusantium quia amet. Est accusamus occaecati et et architecto occaecati iusto. Dolorum qui ut mollitia reprehenderit delectus illum praesentium sapiente. Illum culpa nemo et ipsam a repudiandae.<br><br></div><div>Ut voluptatibus esse deserunt veritatis nemo quia reprehenderit. Eveniet sit ut quia sed quisquam voluptatem.<br><br></div><div>Dolor voluptatibus sed deleniti illum. Quam eum tempora unde optio. Voluptate quam quibusdam voluptate laudantium. Nihil eum quibusdam esse at sed aspernatur.<br><br></div><div>Odio et omnis sapiente suscipit natus. Architecto ullam sint est ipsum. Esse doloremque pariatur est blanditiis explicabo. Ut eos molestiae quis odit. Labore voluptatem optio laborum debitis asperiores mollitia autem.<br><br></div><div>In et dolorum explicabo maiores repellendus inventore. Aut qui dolores molestiae. Quod dignissimos sed exercitationem quibusdam.<br><br></div><div>Deleniti in delectus at ut. Quis quo impedit sit omnis. Est ex reiciendis et. Vero qui similique totam non non.<br><br></div>', 'Tangerang', '25 November 2022', '2022-09-21 19:07:58', '2022-09-21 19:21:37'),
(5, 1, 'Desktop Programmer', 'est-et-illum-dignissimos-excepturi-et', 'work-images/zkPM4JuzRJz1q5fmx3W9N2yhDUMsGNKHAKMRNve0.jpg', '<div>Nobis aut qui est dolores velit magnam quos aut. Qui qui quo voluptatem nisi temporibus est. Omnis aut qui non est. Tenetur nobis vel dignissimos est sit ex ab fugit.</div>', '<div>Repellendus nihil iure qui illo voluptas. Iusto ratione voluptates saepe qui ea esse. Consectetur alias consequatur sunt minus aut ad aut ducimus.<br><br></div><div>Animi ab quidem aut tenetur qui eius officiis vero. Quis et optio rerum cupiditate quibusdam quia. Molestias et delectus omnis vitae quam et. Facilis et ipsa et numquam ut.<br><br></div><div>Temporibus eum est quo incidunt reiciendis rem. Sapiente nobis sed reiciendis consequuntur. Vitae ut sed incidunt distinctio error eaque. Maiores esse nemo placeat.<br><br></div><div>Ratione veritatis consectetur qui id consectetur odit ducimus. Odio et ut voluptas. Blanditiis vel nesciunt soluta illum quis enim. Itaque adipisci eius officiis rerum. Aut ex omnis beatae eum totam doloribus dolor deleniti.<br><br></div><div>Ducimus consequatur vel occaecati non occaecati. Et beatae quia ad aliquam. Assumenda omnis est iste sunt omnis repudiandae earum. Qui exercitationem enim sapiente asperiores tempora ipsa.<br><br></div><div>Quia quia eos non repellendus totam officia. Sit asperiores quia dolores. Quo ut minus excepturi.<br><br></div><div>Eius sit quia eos suscipit. Cum commodi soluta facilis atque. Alias possimus necessitatibus laborum accusantium maxime. Provident dolorem voluptatem voluptatem libero nesciunt consequuntur est.<br><br></div><div>In omnis beatae nostrum incidunt fugit nemo qui. Ullam dolores modi molestias aliquid odit quam porro. Qui sed incidunt dolores sint quia. Ut quia qui sunt voluptatem quia.<br><br></div>', 'Bandung', '23 September 2022', '2022-09-21 19:07:58', '2022-09-21 19:22:12'),
(6, 1, 'Frontend Developer', 'repellat-cum-sed-et-et-dolorem-ex-sit-et', 'work-images/MxAeNY9ZDhMLvpkS0FE5lVIByrVvwdCpRGzChsHf.jpg', '<div>Ex modi saepe reprehenderit ex eos aut. Reprehenderit dolore nisi quos id quia rerum velit nihil. Qui distinctio et enim voluptas.</div>', '<div>Nihil voluptatem qui commodi impedit in quis reprehenderit. Voluptatem similique rerum delectus quia. Veritatis quibusdam dolor sit incidunt beatae.<br><br></div><div>Consequatur exercitationem aut qui eos sint. Recusandae velit ratione quia aut ut quasi.<br><br></div><div>Accusantium ab quas sit voluptatum eligendi nemo molestiae. Omnis fuga ad aut ad voluptatibus. Corporis temporibus occaecati recusandae eos consectetur officiis. Beatae similique voluptatem quo.<br><br></div><div>Nemo amet nihil atque laboriosam ad numquam omnis. Optio fugit aut et occaecati in iure omnis. Qui eveniet aut eos et. Et sapiente iure omnis amet aperiam nisi.<br><br></div><div>Quo asperiores repudiandae voluptate sit qui aspernatur. Saepe dolorem delectus voluptas illum. Qui et vel qui veniam.<br><br></div><div>Saepe voluptates dolorem omnis blanditiis rem commodi reprehenderit. Ut rerum ratione vero id tempora beatae beatae eos. Suscipit earum aut dolorem et delectus perspiciatis. Officia eos esse quia incidunt cum modi nulla excepturi. Non nesciunt eos qui aperiam repudiandae.<br><br></div><div>Beatae quia iure ullam asperiores alias optio. Assumenda inventore repellendus odio aut dolorum rem et. Nulla cumque voluptas et est est neque ducimus. Possimus quaerat atque iure.<br><br></div><div>Porro sed aut odio aperiam quidem voluptate minima. Numquam pariatur incidunt repudiandae excepturi dolore. Et voluptas facere molestiae velit. Placeat in laboriosam vero quis tenetur pariatur sint.<br><br></div>', 'Jakarta', '20 Mei 2022', '2022-09-21 19:07:58', '2022-09-21 19:23:06'),
(7, 1, 'Backend Developer', 'Backend Developer', 'work-images/woKDGC2xUmWIED6KWAAmUXuBao2NgBV47Ycm95Hq.jpg', '<div>Tugas pertama dari seorang admin priyek adalah melakukan proses data entry. Data yang dimansukkan adalah data yang berkaitan dengan segala hal di dalam proyek. Harus ada pendataan yang jelas dan terorganisir di dalam komputer yang dikelola oleh seorang administrasi proyek baik itu dari segi tanggal, nama data, penanggung jawab, dan banyak hal lain. Hal ini bertujuan agar data tersebut bisa segera diakses sebagai bahan rujukan apabila terdapat kesalahan dalam proses proyek konstruksi yang berlangsung.</div>', '<div>Job Description</div><div>1. Melakukan Proses Data Entry<br>Tugas pertama dari seorang admin priyek adalah melakukan proses data entry. Data yang dimansukkan adalah data yang berkaitan dengan segala hal di dalam proyek. Harus ada pendataan yang jelas dan terorganisir di dalam komputer yang dikelola oleh seorang administrasi proyek baik itu dari segi tanggal, nama data, penanggung jawab, dan banyak hal lain. Hal ini bertujuan agar data tersebut bisa segera diakses sebagai bahan rujukan apabila terdapat kesalahan dalam proses proyek konstruksi yang berlangsung.<br>2. Melakukan Sesi Dokumentasi<br>Tugas kedua dari seorang admin proyek adalah melakukan proses dokumentasi. Perlu anda tahu, proses dokumentasi ini harus berjalan secara faktual dan tidak terlambat. Dokumentasi hari itu harus dilakukan hari itu juga agar proses dalam proyek terlihat secara signifikan. Lebih jauhnya perlu anda ketahui kalau proses dokumentasi ini tidak hanya berbentuk dokumentasi foto saja melainkan juga data data dan media lainnya seperti misalkan video dan tanda tangan dari orang orang yang berkaitan dengan dokumentasi tersebut.<br>3. Menjaga dan Mengecek Inventory Kantor<br>Selanjutnya seorang admin proyek juga memiliki tugas sebagai penjaga inventori dan aset perusahaan di proyek tempat dia bekerja. Setiap aset dan fasilitas perusahaan harus di cek dengan baik supaya tidak terjadi kesalahan dan atau kehilangan. Pastikan semua inventory dan aset di cek setiap pulang kerja, atau setidaknya anda memiliki bukti kalau aset tersebut sedang digunakan oleh pihak lain agar ada yang bertanggung jawab apabila terjadi kehilangan.<br>4. Mengecek Biaya Operasional dan Membuat Reiburstment Ke Pusat<br>Tugas selanjutnya yang harus dilakukan oleh sorang admin proyek adalah melakukan pengecekan dan validasi terhadap semua biaya pengeluaran di dalam kantor selama berada di proyek seperti misalnya biaya listrik (bila ada), biaya internet, pembelian ATK, dan beragam biasaya operasional lainnya yang mungkin muncul pada saat proyek dilaksanakan. Sebagai seorang admin proyek anda harus melakukan validasi terhadap data data yang diberikan oleh pegawai yang hendak melakukan reimburstment/klaim terhadap perusahaan. Jika terdapat data yang tidak memadai atau tidak akurat, anda bisa menolaknya. Setelah data data tersebut lengkap dan terpenuhi, selanjutnya anda hanya tinggal melakukan proses <em>reimburst</em> dengan mengirimkan <em>invoice</em> ke kantor pusat.<br>5. Membuat Surat Jalan<br>Tugas admin proyek selanjutnya adalah melakukan pembuatan surat jalan dan menerima surat jalan untuk segala kendaraan yang masuk ke atau dari proyek secara jelas. Biasanya untuk memaksimalkan pekerjaan ini anda harus berkoordinasi dengan pihak security yang berjaga di pintu masuk / keluar kendaraan.<br>6. Membuat Data Absensi dan Lembur<br>Lebih jauh, seringkali anda juga harus membuat data absensi dan lembur dari karyawan yang bertugas untuk memastikan kalau biaya perusahaan benar benar terintegrasi dengan baik dan tidak ada kesalahan disini. Biasanya hal ini yang seringkali menimbulkan konflik karena di dalam proyek, seringkali anda harus melakukan banyak koordinasi dengan pihak kedua atau ke tiga. Proyek biasanya dilakukan oleh berbagai pihak dan anda harus mengkoordinasikan hal ini dengan baik secara persuasif.<br>7. Membuat Laporan Mingguan/Bulanan<br>Hal selanjutnya yang harus anda lakukan adalah membuat laporan bulanan dan mingguan dari segala aktivitas proyek yang anda lakukan. Laporan ini harus ditandatangani oleh manajer proyek dan diketahu oleh pihak pihak yang berkaitan dengan proyek yang sedang berjalan.<br>8. Merapikan Dokumen Dan Membuat Salinan Dari Tiap Dokumen Yang Ada<br>membuat salinan dari tiap dokumen yang ada agar anda tidak berpotensi untuk kehilangan data data yang anda miliki. Anda juga harus merapikan dokumen dokumen tersebut agar bisa diakses dengan mudah bilamana sewaktu waktu dibutuhkan.</div>', 'Serang', '1 November 2022', '2022-09-21 19:24:06', '2022-09-21 19:24:06'),
(8, 1, 'IT Manager', 'IT Manager', 'work-images/r4RuYd1taRXh5xCPu2TRYecg7I94UTeRDvAVjq7E.jpg', '<div>Tugas pertama dari seorang admin priyek adalah melakukan proses data entry. Data yang dimansukkan adalah data yang berkaitan dengan segala hal di dalam proyek. Harus ada pendataan yang jelas dan terorganisir di dalam komputer yang dikelola oleh seorang administrasi proyek baik itu dari segi tanggal, nama data, penanggung jawab, dan banyak hal lain. Hal ini bertujuan agar data tersebut bisa segera diakses sebagai bahan rujukan apabila terdapat kesalahan dalam proses proyek konstruksi yang berlangsung.</div>', '<div>Job Description</div><div>1. Melakukan Proses Data Entry<br>Tugas pertama dari seorang admin priyek adalah melakukan proses data entry. Data yang dimansukkan adalah data yang berkaitan dengan segala hal di dalam proyek. Harus ada pendataan yang jelas dan terorganisir di dalam komputer yang dikelola oleh seorang administrasi proyek baik itu dari segi tanggal, nama data, penanggung jawab, dan banyak hal lain. Hal ini bertujuan agar data tersebut bisa segera diakses sebagai bahan rujukan apabila terdapat kesalahan dalam proses proyek konstruksi yang berlangsung.<br>2. Melakukan Sesi Dokumentasi<br>Tugas kedua dari seorang admin proyek adalah melakukan proses dokumentasi. Perlu anda tahu, proses dokumentasi ini harus berjalan secara faktual dan tidak terlambat. Dokumentasi hari itu harus dilakukan hari itu juga agar proses dalam proyek terlihat secara signifikan. Lebih jauhnya perlu anda ketahui kalau proses dokumentasi ini tidak hanya berbentuk dokumentasi foto saja melainkan juga data data dan media lainnya seperti misalkan video dan tanda tangan dari orang orang yang berkaitan dengan dokumentasi tersebut.<br>3. Menjaga dan Mengecek Inventory Kantor<br>Selanjutnya seorang admin proyek juga memiliki tugas sebagai penjaga inventori dan aset perusahaan di proyek tempat dia bekerja. Setiap aset dan fasilitas perusahaan harus di cek dengan baik supaya tidak terjadi kesalahan dan atau kehilangan. Pastikan semua inventory dan aset di cek setiap pulang kerja, atau setidaknya anda memiliki bukti kalau aset tersebut sedang digunakan oleh pihak lain agar ada yang bertanggung jawab apabila terjadi kehilangan.<br>4. Mengecek Biaya Operasional dan Membuat Reiburstment Ke Pusat<br>Tugas selanjutnya yang harus dilakukan oleh sorang admin proyek adalah melakukan pengecekan dan validasi terhadap semua biaya pengeluaran di dalam kantor selama berada di proyek seperti misalnya biaya listrik (bila ada), biaya internet, pembelian ATK, dan beragam biasaya operasional lainnya yang mungkin muncul pada saat proyek dilaksanakan. Sebagai seorang admin proyek anda harus melakukan validasi terhadap data data yang diberikan oleh pegawai yang hendak melakukan reimburstment/klaim terhadap perusahaan. Jika terdapat data yang tidak memadai atau tidak akurat, anda bisa menolaknya. Setelah data data tersebut lengkap dan terpenuhi, selanjutnya anda hanya tinggal melakukan proses <em>reimburst</em> dengan mengirimkan <em>invoice</em> ke kantor pusat.<br>5. Membuat Surat Jalan<br>Tugas admin proyek selanjutnya adalah melakukan pembuatan surat jalan dan menerima surat jalan untuk segala kendaraan yang masuk ke atau dari proyek secara jelas. Biasanya untuk memaksimalkan pekerjaan ini anda harus berkoordinasi dengan pihak security yang berjaga di pintu masuk / keluar kendaraan.<br>6. Membuat Data Absensi dan Lembur<br>Lebih jauh, seringkali anda juga harus membuat data absensi dan lembur dari karyawan yang bertugas untuk memastikan kalau biaya perusahaan benar benar terintegrasi dengan baik dan tidak ada kesalahan disini. Biasanya hal ini yang seringkali menimbulkan konflik karena di dalam proyek, seringkali anda harus melakukan banyak koordinasi dengan pihak kedua atau ke tiga. Proyek biasanya dilakukan oleh berbagai pihak dan anda harus mengkoordinasikan hal ini dengan baik secara persuasif.<br>7. Membuat Laporan Mingguan/Bulanan<br>Hal selanjutnya yang harus anda lakukan adalah membuat laporan bulanan dan mingguan dari segala aktivitas proyek yang anda lakukan. Laporan ini harus ditandatangani oleh manajer proyek dan diketahu oleh pihak pihak yang berkaitan dengan proyek yang sedang berjalan.<br>8. Merapikan Dokumen Dan Membuat Salinan Dari Tiap Dokumen Yang Ada<br>membuat salinan dari tiap dokumen yang ada agar anda tidak berpotensi untuk kehilangan data data yang anda miliki. Anda juga harus merapikan dokumen dokumen tersebut agar bisa diakses dengan mudah bilamana sewaktu waktu dibutuhkan.</div>', 'Tangerang', '2 November 2022', '2022-09-21 19:24:48', '2022-09-21 19:24:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `applies`
--
ALTER TABLE `applies`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_slug_unique` (`slug`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `prospects`
--
ALTER TABLE `prospects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prospects_slug_unique` (`slug`);

--
-- Indeks untuk tabel `startups`
--
ALTER TABLE `startups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `startups_title_unique` (`title`),
  ADD UNIQUE KEY `startups_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `works_title_unique` (`title`),
  ADD UNIQUE KEY `works_slug_unique` (`slug`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `applies`
--
ALTER TABLE `applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prospects`
--
ALTER TABLE `prospects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `startups`
--
ALTER TABLE `startups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
