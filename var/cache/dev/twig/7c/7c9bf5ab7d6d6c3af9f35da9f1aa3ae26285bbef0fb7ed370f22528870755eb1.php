<?php

/* ESFEspaceAbonneBundle:Back:monprofil.html.twig */
class __TwigTemplate_fc0eb36a8530b78a7e3eb85bdb111d55edd4f22a32e3c3c53f2a8a67ca52c7fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:monprofil.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f29652d12d5cd623b610b6c840c30776762f802a41ffb51e672e7a43cc36a04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f29652d12d5cd623b610b6c840c30776762f802a41ffb51e672e7a43cc36a04->enter($__internal_7f29652d12d5cd623b610b6c840c30776762f802a41ffb51e672e7a43cc36a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:monprofil.html.twig"));

        $__internal_c61c9dcb0226bcd8f32d7ea4771188532191c30845571ac15a0a69cfdbbc4265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61c9dcb0226bcd8f32d7ea4771188532191c30845571ac15a0a69cfdbbc4265->enter($__internal_c61c9dcb0226bcd8f32d7ea4771188532191c30845571ac15a0a69cfdbbc4265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:monprofil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f29652d12d5cd623b610b6c840c30776762f802a41ffb51e672e7a43cc36a04->leave($__internal_7f29652d12d5cd623b610b6c840c30776762f802a41ffb51e672e7a43cc36a04_prof);

        
        $__internal_c61c9dcb0226bcd8f32d7ea4771188532191c30845571ac15a0a69cfdbbc4265->leave($__internal_c61c9dcb0226bcd8f32d7ea4771188532191c30845571ac15a0a69cfdbbc4265_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5460fd3f4626a4f1613bce88d0c774897049827c83345591282dc1d0153f83b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5460fd3f4626a4f1613bce88d0c774897049827c83345591282dc1d0153f83b4->enter($__internal_5460fd3f4626a4f1613bce88d0c774897049827c83345591282dc1d0153f83b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8649df70bd0ffe7c59d1e36aefa618d760b58b4c0de8046c0d364414271ee1f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8649df70bd0ffe7c59d1e36aefa618d760b58b4c0de8046c0d364414271ee1f6->enter($__internal_8649df70bd0ffe7c59d1e36aefa618d760b58b4c0de8046c0d364414271ee1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mon Profil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8649df70bd0ffe7c59d1e36aefa618d760b58b4c0de8046c0d364414271ee1f6->leave($__internal_8649df70bd0ffe7c59d1e36aefa618d760b58b4c0de8046c0d364414271ee1f6_prof);

        
        $__internal_5460fd3f4626a4f1613bce88d0c774897049827c83345591282dc1d0153f83b4->leave($__internal_5460fd3f4626a4f1613bce88d0c774897049827c83345591282dc1d0153f83b4_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_400e792b2c4cd9257ae734807313168fa9a7e310ef7d67504d029fb75ebf4809 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_400e792b2c4cd9257ae734807313168fa9a7e310ef7d67504d029fb75ebf4809->enter($__internal_400e792b2c4cd9257ae734807313168fa9a7e310ef7d67504d029fb75ebf4809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_900486b7bc129948412d6a4eebdc1f1e1a74b784bf4aefacdb1203de363ef367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_900486b7bc129948412d6a4eebdc1f1e1a74b784bf4aefacdb1203de363ef367->enter($__internal_900486b7bc129948412d6a4eebdc1f1e1a74b784bf4aefacdb1203de363ef367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mon Profil</li>
    </ol>
";
        
        $__internal_900486b7bc129948412d6a4eebdc1f1e1a74b784bf4aefacdb1203de363ef367->leave($__internal_900486b7bc129948412d6a4eebdc1f1e1a74b784bf4aefacdb1203de363ef367_prof);

        
        $__internal_400e792b2c4cd9257ae734807313168fa9a7e310ef7d67504d029fb75ebf4809->leave($__internal_400e792b2c4cd9257ae734807313168fa9a7e310ef7d67504d029fb75ebf4809_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_bb0f559f3dcc6688798b29a2e3a396c0afe3e30502dd5d11e50fd1e96d6c677f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0f559f3dcc6688798b29a2e3a396c0afe3e30502dd5d11e50fd1e96d6c677f->enter($__internal_bb0f559f3dcc6688798b29a2e3a396c0afe3e30502dd5d11e50fd1e96d6c677f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f5ff1c4314d50ada7bcdb27f234ab99b7d3d0b84577e0412def204f3934b8e0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5ff1c4314d50ada7bcdb27f234ab99b7d3d0b84577e0412def204f3934b8e0d->enter($__internal_f5ff1c4314d50ada7bcdb27f234ab99b7d3d0b84577e0412def204f3934b8e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"form-group\">

        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 18
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                <strong> ";
            // line 19
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo " </strong> 
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        <!-- Mon profil -->
        ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 26
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 27
            echo "            <div class=\"alert alert-error\">
                ";
            // line 28
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
            </div>
        ";
        }
        // line 31
        echo "
        <div class=\"col-md-4\">
            <div class=\"form-group\">

                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'label', array("label" => "Nom"));
        echo "
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'errors');
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "nom", array()), 'widget');
        echo "

                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "datenaissance", array()), 'label', array("label" => "Date de naissance"));
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "datenaissance", array()), 'errors');
        echo "
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "datenaissance", array()), 'widget');
        echo "

                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "numero", array()), 'label', array("label" => "Numéro de la rue"));
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "numero", array()), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "numero", array()), 'widget');
        echo "

                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "codepostal", array()), 'label', array("label" => "Code Postal"));
        echo "
                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "codepostal", array()), 'errors');
        echo "
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "codepostal", array()), 'widget');
        echo "

                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "pays", array()), 'label', array("label" => "Pays"));
        echo "
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "pays", array()), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "pays", array()), 'widget');
        echo "

                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "telephone", array()), 'label', array("label" => "Téléphone fixe"));
        echo "
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "telephone", array()), 'errors');
        echo "
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "telephone", array()), 'widget');
        echo "

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"form-group\">

                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'errors');
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "prenom", array()), 'widget');
        echo "

                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numerocarteid", array()), 'label', array("label" => "Numéro de carte d'identité"));
        echo "
                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numerocarteid", array()), 'errors');
        echo "
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "numerocarteid", array()), 'widget');
        echo "

                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "rue", array()), 'label', array("label" => "Nom de la rue"));
        echo "
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "rue", array()), 'errors');
        echo "
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "rue", array()), 'widget');
        echo "

                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "ville", array()), 'label', array("label" => "Ville"));
        echo "
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "ville", array()), 'errors');
        echo "
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "ville", array()), 'widget');
        echo "

                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "courriel", array()), 'label', array("label" => "Email"));
        echo "
                ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "courriel", array()), 'errors');
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "courriel", array()), 'widget');
        echo "

                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "gsm", array()), 'label', array("label" => "Portable"));
        echo "
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "gsm", array()), 'errors');
        echo "
                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "personne", array()), "gsm", array()), 'widget');
        echo "

            </div>
        </div>
        ";
        // line 91
        if (array_key_exists("imageUser", $context)) {
            echo "  
          <div class=\"col-md-4\">
            <div class=\"form-group\">
                ";
            // line 95
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Vich\UploaderBundle\Twig\Extension\UploaderExtension')->asset(($context["imageUser"] ?? $this->getContext($context, "imageUser")), "imageFile"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["imageUser"] ?? $this->getContext($context, "imageUser")), "imageName", array()), "html", null, true);
            echo "\" />
            </div>
        </div>
    ";
        }
        // line 99
        echo "    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <div class=\"vich-image\">
                ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "image", array()), "imageFile", array()), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
            ";
        // line 109
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "physique", array()), "enregistrer", array()), 'widget');
        echo "
        </div>
    </div>
</div>
";
        // line 114
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_f5ff1c4314d50ada7bcdb27f234ab99b7d3d0b84577e0412def204f3934b8e0d->leave($__internal_f5ff1c4314d50ada7bcdb27f234ab99b7d3d0b84577e0412def204f3934b8e0d_prof);

        
        $__internal_bb0f559f3dcc6688798b29a2e3a396c0afe3e30502dd5d11e50fd1e96d6c677f->leave($__internal_bb0f559f3dcc6688798b29a2e3a396c0afe3e30502dd5d11e50fd1e96d6c677f_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:monprofil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 114,  344 => 110,  339 => 109,  330 => 102,  325 => 99,  315 => 95,  309 => 91,  302 => 87,  298 => 86,  294 => 85,  289 => 83,  285 => 82,  281 => 81,  276 => 79,  272 => 78,  268 => 77,  263 => 75,  259 => 74,  255 => 73,  250 => 71,  246 => 70,  242 => 69,  237 => 67,  233 => 66,  229 => 65,  218 => 57,  214 => 56,  210 => 55,  205 => 53,  201 => 52,  197 => 51,  192 => 49,  188 => 48,  184 => 47,  179 => 45,  175 => 44,  171 => 43,  166 => 41,  162 => 40,  158 => 39,  153 => 37,  149 => 36,  145 => 35,  139 => 31,  133 => 28,  130 => 27,  128 => 26,  123 => 24,  119 => 22,  110 => 19,  107 => 18,  103 => 17,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Mon Profil - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mon Profil</li>
    </ol>
{% endblock %}

{% block Content %} 
    <div class=\"form-group\">

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"alert alert-success\" role=\"alert\">
                <strong> {{ flash_message }} </strong> 
            </div>
        {% endfor %}

        <!-- Mon profil -->
        {{ form_start(form) }}

        {% if not form.vars.valid %}
            <div class=\"alert alert-error\">
                {{ form_errors(form) }}
            </div>
        {% endif %}

        <div class=\"col-md-4\">
            <div class=\"form-group\">

                {{ form_label(form.physique.nom, 'Nom') }}
                {{ form_errors(form.physique.nom) }}
                {{ form_widget(form.physique.nom) }}

                {{ form_label(form.physique.datenaissance, 'Date de naissance') }}
                {{ form_errors(form.physique.datenaissance) }}
                {{ form_widget(form.physique.datenaissance) }}

                {{ form_label(form.physique.personne.numero, 'Numéro de la rue') }}
                {{ form_errors(form.physique.personne.numero) }}
                {{ form_widget(form.physique.personne.numero) }}

                {{ form_label(form.physique.personne.codepostal, 'Code Postal') }}
                {{ form_errors(form.physique.personne.codepostal) }}
                {{ form_widget(form.physique.personne.codepostal) }}

                {{ form_label(form.physique.personne.pays, 'Pays') }}
                {{ form_errors(form.physique.personne.pays) }}
                {{ form_widget(form.physique.personne.pays) }}

                {{ form_label(form.physique.personne.telephone, 'Téléphone fixe') }}
                {{ form_errors(form.physique.personne.telephone) }}
                {{ form_widget(form.physique.personne.telephone) }}

            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"form-group\">

                {{ form_label(form.physique.prenom, 'Prénom') }}
                {{ form_errors(form.physique.prenom) }}
                {{ form_widget(form.physique.prenom) }}

                {{ form_label(form.physique.numerocarteid, 'Numéro de carte d\\'identité') }}
                {{ form_errors(form.physique.numerocarteid) }}
                {{ form_widget(form.physique.numerocarteid) }}

                {{ form_label(form.physique.personne.rue, 'Nom de la rue') }}
                {{ form_errors(form.physique.personne.rue) }}
                {{ form_widget(form.physique.personne.rue) }}

                {{ form_label(form.physique.personne.ville, 'Ville') }}
                {{ form_errors(form.physique.personne.ville) }}
                {{ form_widget(form.physique.personne.ville) }}

                {{ form_label(form.physique.personne.courriel, 'Email') }}
                {{ form_errors(form.physique.personne.courriel) }}
                {{ form_widget(form.physique.personne.courriel) }}

                {{ form_label(form.physique.personne.gsm, 'Portable') }}
                {{ form_errors(form.physique.personne.gsm) }}
                {{ form_widget(form.physique.personne.gsm) }}

            </div>
        </div>
        {% if imageUser is defined %}  
          <div class=\"col-md-4\">
            <div class=\"form-group\">
                {# | imagine_filter('my_thumb') #}
                <img src=\"{{ vich_uploader_asset(imageUser, 'imageFile' )   }}\" alt=\"{{ imageUser.imageName }}\" />
            </div>
        </div>
    {% endif %}
    <div class=\"col-md-4\">
        <div class=\"form-group\">
            <div class=\"vich-image\">
                {{ form_widget(form.physique.image.imageFile.file) }}
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-10\">
            {# TOKEN #}
            {{ form_widget(form._token) }}
            {{ form_widget(form.physique.enregistrer) }}
        </div>
    </div>
</div>
{{ form_end(form, {'render_rest': false}) }}
{% endblock %}", "ESFEspaceAbonneBundle:Back:monprofil.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/monprofil.html.twig");
    }
}
