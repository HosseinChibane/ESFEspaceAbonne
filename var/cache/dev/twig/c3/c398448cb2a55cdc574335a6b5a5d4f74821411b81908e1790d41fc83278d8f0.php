<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_3f177243aad3212c75c98d83e3ee0f8abe5e71c8b8ac03d2e8164e906dbe4179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2681abc1ff270cad13569377f2ba179dd3a40331a4681b2ef7a91c731f26848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2681abc1ff270cad13569377f2ba179dd3a40331a4681b2ef7a91c731f26848->enter($__internal_a2681abc1ff270cad13569377f2ba179dd3a40331a4681b2ef7a91c731f26848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_69cac596f05495f89ae3bef4b4d2aa180ddb4b561aa0ef9c82e8ca50f4706478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69cac596f05495f89ae3bef4b4d2aa180ddb4b561aa0ef9c82e8ca50f4706478->enter($__internal_69cac596f05495f89ae3bef4b4d2aa180ddb4b561aa0ef9c82e8ca50f4706478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_a2681abc1ff270cad13569377f2ba179dd3a40331a4681b2ef7a91c731f26848->leave($__internal_a2681abc1ff270cad13569377f2ba179dd3a40331a4681b2ef7a91c731f26848_prof);

        
        $__internal_69cac596f05495f89ae3bef4b4d2aa180ddb4b561aa0ef9c82e8ca50f4706478->leave($__internal_69cac596f05495f89ae3bef4b4d2aa180ddb4b561aa0ef9c82e8ca50f4706478_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_f92e22e1c73029b551da038d56bb65fb50e9eeb5979df56699a6837903c2468c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92e22e1c73029b551da038d56bb65fb50e9eeb5979df56699a6837903c2468c->enter($__internal_f92e22e1c73029b551da038d56bb65fb50e9eeb5979df56699a6837903c2468c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_0869ee8249bcd30ca22b37434df40eb460a08b447afb94a85d7d4799ea06e59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0869ee8249bcd30ca22b37434df40eb460a08b447afb94a85d7d4799ea06e59f->enter($__internal_0869ee8249bcd30ca22b37434df40eb460a08b447afb94a85d7d4799ea06e59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0869ee8249bcd30ca22b37434df40eb460a08b447afb94a85d7d4799ea06e59f->leave($__internal_0869ee8249bcd30ca22b37434df40eb460a08b447afb94a85d7d4799ea06e59f_prof);

        
        $__internal_f92e22e1c73029b551da038d56bb65fb50e9eeb5979df56699a6837903c2468c->leave($__internal_f92e22e1c73029b551da038d56bb65fb50e9eeb5979df56699a6837903c2468c_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_d14ef39254f5c1267396e939132d6833251d42fcf2a6e93c6af8efb49e859863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14ef39254f5c1267396e939132d6833251d42fcf2a6e93c6af8efb49e859863->enter($__internal_d14ef39254f5c1267396e939132d6833251d42fcf2a6e93c6af8efb49e859863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_f4b3715c643f330776cdb8fc3e57e6b82b450df4f9caafe400952f0269ead6bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b3715c643f330776cdb8fc3e57e6b82b450df4f9caafe400952f0269ead6bb->enter($__internal_f4b3715c643f330776cdb8fc3e57e6b82b450df4f9caafe400952f0269ead6bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f4b3715c643f330776cdb8fc3e57e6b82b450df4f9caafe400952f0269ead6bb->leave($__internal_f4b3715c643f330776cdb8fc3e57e6b82b450df4f9caafe400952f0269ead6bb_prof);

        
        $__internal_d14ef39254f5c1267396e939132d6833251d42fcf2a6e93c6af8efb49e859863->leave($__internal_d14ef39254f5c1267396e939132d6833251d42fcf2a6e93c6af8efb49e859863_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_e160f0daee240c408b600db28af65d3709005406bc90215f144cfdbb63a4a811 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e160f0daee240c408b600db28af65d3709005406bc90215f144cfdbb63a4a811->enter($__internal_e160f0daee240c408b600db28af65d3709005406bc90215f144cfdbb63a4a811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_6f3b0eb821dad715207f0f6b16c8f861fea6f1314f94d15c9ea9f5dc609575f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f3b0eb821dad715207f0f6b16c8f861fea6f1314f94d15c9ea9f5dc609575f8->enter($__internal_6f3b0eb821dad715207f0f6b16c8f861fea6f1314f94d15c9ea9f5dc609575f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6f3b0eb821dad715207f0f6b16c8f861fea6f1314f94d15c9ea9f5dc609575f8->leave($__internal_6f3b0eb821dad715207f0f6b16c8f861fea6f1314f94d15c9ea9f5dc609575f8_prof);

        
        $__internal_e160f0daee240c408b600db28af65d3709005406bc90215f144cfdbb63a4a811->leave($__internal_e160f0daee240c408b600db28af65d3709005406bc90215f144cfdbb63a4a811_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_e0f8cd1726b47ef1518188649955ee486e558b09725a522273340f497311e38b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f8cd1726b47ef1518188649955ee486e558b09725a522273340f497311e38b->enter($__internal_e0f8cd1726b47ef1518188649955ee486e558b09725a522273340f497311e38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_79f3d5870fd63f50f57ec0730faabb9cfc7b0197509ffe434231295a60993f7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79f3d5870fd63f50f57ec0730faabb9cfc7b0197509ffe434231295a60993f7a->enter($__internal_79f3d5870fd63f50f57ec0730faabb9cfc7b0197509ffe434231295a60993f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_79f3d5870fd63f50f57ec0730faabb9cfc7b0197509ffe434231295a60993f7a->leave($__internal_79f3d5870fd63f50f57ec0730faabb9cfc7b0197509ffe434231295a60993f7a_prof);

        
        $__internal_e0f8cd1726b47ef1518188649955ee486e558b09725a522273340f497311e38b->leave($__internal_e0f8cd1726b47ef1518188649955ee486e558b09725a522273340f497311e38b_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
